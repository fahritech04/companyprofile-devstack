<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\InvoiceModel;
use App\Models\OrderModel;

class BillingManageController extends BaseController
{
    protected $invoiceModel;
    protected $orderModel;

    public function __construct()
    {
        $this->invoiceModel = new InvoiceModel();
        $this->orderModel = new OrderModel();
    }

    public function index()
    {
        $invoices = $this->invoiceModel
            ->select('invoices.*, orders.project_name, orders.order_number, users.first_name, users.last_name')
            ->join('orders', 'orders.id = invoices.order_id', 'left')
            ->join('users', 'users.id = orders.user_id', 'left')
            ->orderBy('invoices.created_at', 'DESC')
            ->findAll();

        $data = [
            'title' => 'Billing Management',
            'active' => 'billing',
            'invoices' => $invoices,
            'totalRevenue' => $this->invoiceModel->getTotalRevenue(),
        ];

        return view('admin/billing/index', $data);
    }

    public function show($id)
    {
        $invoice = $this->invoiceModel
            ->select('invoices.*, orders.project_name, orders.order_number, orders.user_id, users.first_name, users.last_name, users.email as user_email')
            ->join('orders', 'orders.id = invoices.order_id', 'left')
            ->join('users', 'users.id = orders.user_id', 'left')
            ->where('invoices.id', $id)
            ->first();

        if (!$invoice) {
            return redirect()->to('/admin/billing')->with('error', 'Invoice tidak ditemukan.');
        }

        $data = [
            'title' => 'Invoice #' . $invoice['invoice_number'],
            'active' => 'billing',
            'invoice' => $invoice,
        ];

        return view('admin/billing/show', $data);
    }

    public function verify($id)
    {
        $invoice = $this->invoiceModel->find($id);
        if (!$invoice) {
            return redirect()->to('/admin/billing')->with('error', 'Invoice tidak ditemukan.');
        }

        $action = $this->request->getPost('action'); // 'approve' or 'reject'

        if ($action === 'approve') {
            $this->invoiceModel->update($id, [
                'status' => 'paid',
                'paid_at' => date('Y-m-d H:i:s'),
            ]);

            // Update order status to paid
            $this->orderModel->update($invoice['order_id'], ['status' => 'paid']);

            return redirect()->to('/admin/billing/' . $id)->with('success', 'Pembayaran berhasil diverifikasi!');
        } else {
            $this->invoiceModel->update($id, [
                'status' => 'unpaid',
                'notes' => $this->request->getPost('reject_reason'),
            ]);

            return redirect()->to('/admin/billing/' . $id)->with('success', 'Pembayaran ditolak. Klien bisa upload ulang.');
        }
    }
}
