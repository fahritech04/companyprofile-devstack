<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\ServicePackageModel;
use App\Models\OrderModel;
use App\Models\OrderAssetModel;
use App\Models\MilestoneModel;
use App\Models\InvoiceModel;

class OrderController extends BaseController
{
    protected $packageModel;
    protected $orderModel;
    protected $assetModel;
    protected $milestoneModel;
    protected $invoiceModel;

    public function __construct()
    {
        $this->packageModel = new ServicePackageModel();
        $this->orderModel = new OrderModel();
        $this->assetModel = new OrderAssetModel();
        $this->milestoneModel = new MilestoneModel();
        $this->invoiceModel = new InvoiceModel();
    }

    /**
     * Display order form — choose package and fill brief
     */
    public function create($category = null)
    {
        $packages = $this->packageModel->getActiveByCategory();

        $data = [
            'title' => 'Order Layanan',
            'packages' => $packages,
            'activeCategory' => $category ?? 'website',
        ];

        return view('client/orders/create', $data);
    }

    /**
     * Process new order
     */
    public function store()
    {
        $rules = [
            'package_id' => 'required|numeric',
            'project_name' => 'required|min_length[3]|max_length[255]',
            'brief' => 'required|min_length[20]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userId = session()->get('user_id');
        $packageId = $this->request->getPost('package_id');
        $package = $this->packageModel->find($packageId);

        if (!$package) {
            return redirect()->back()->with('error', 'Paket tidak ditemukan.');
        }

        // Create order
        $orderData = [
            'user_id' => $userId,
            'package_id' => $packageId,
            'order_number' => $this->orderModel->generateOrderNumber(),
            'project_name' => $this->request->getPost('project_name'),
            'brief' => $this->request->getPost('brief'),
            'reference_urls' => $this->request->getPost('reference_urls'),
            'target_audience' => $this->request->getPost('target_audience'),
            'status' => 'pending',
            'agreed_price' => $package['is_custom_price'] ? 0 : $package['price'],
            'deadline' => date('Y-m-d', strtotime("+{$package['duration_days']} days")),
        ];

        $orderId = $this->orderModel->insert($orderData);

        if (!$orderId) {
            return redirect()->back()->withInput()->with('error', 'Gagal membuat order. Silakan coba lagi.');
        }

        // Create default milestones
        $this->milestoneModel->createDefaults($orderId, $package['category']);

        // Create invoice (if not custom price)
        if (!$package['is_custom_price']) {
            $this->invoiceModel->insert([
                'order_id' => $orderId,
                'invoice_number' => $this->invoiceModel->generateInvoiceNumber(),
                'amount' => $package['price'],
                'type' => 'full',
                'status' => 'unpaid',
                'due_date' => date('Y-m-d', strtotime('+3 days')),
            ]);
        }

        // Handle file uploads
        $files = $this->request->getFiles();
        if (isset($files['assets'])) {
            foreach ($files['assets'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move(FCPATH . 'uploads/orders/' . $orderId, $newName);

                    $this->assetModel->insert([
                        'order_id' => $orderId,
                        'file_name' => $file->getClientName(),
                        'file_path' => 'uploads/orders/' . $orderId . '/' . $newName,
                        'file_type' => 'document',
                        'file_size' => $file->getSize(),
                        'uploaded_by' => $userId,
                    ]);
                }
            }
        }

        return redirect()->to('/client/orders')->with('success', 'Order berhasil dibuat! Silakan lakukan pembayaran.');
    }

    /**
     * List user's orders
     */
    public function index()
    {
        $userId = session()->get('user_id');
        $orders = $this->orderModel->getByUser($userId);

        // Add progress to each order
        foreach ($orders as &$order) {
            $order['progress'] = $this->milestoneModel->getProgress($order['id']);
        }

        $data = [
            'title' => 'My Orders',
            'orders' => $orders,
        ];

        return view('client/orders/index', $data);
    }

    /**
     * Show order detail
     */
    public function show($id)
    {
        $userId = session()->get('user_id');
        $order = $this->orderModel->getDetail($id);

        if (!$order || $order['user_id'] != $userId) {
            return redirect()->to('/client/orders')->with('error', 'Order tidak ditemukan.');
        }

        $milestones = $this->milestoneModel->getByOrder($id);
        $assets = $this->assetModel->getByOrder($id);
        $invoices = $this->invoiceModel->getByOrder($id);
        $progress = $this->milestoneModel->getProgress($id);

        $data = [
            'title' => 'Order #' . $order['order_number'],
            'order' => $order,
            'milestones' => $milestones,
            'assets' => $assets,
            'invoices' => $invoices,
            'progress' => $progress,
        ];

        return view('client/orders/show', $data);
    }
}
