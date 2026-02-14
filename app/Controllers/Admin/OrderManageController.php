<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\MilestoneModel;
use App\Models\RevisionModel;
use App\Models\OrderAssetModel;

class OrderManageController extends BaseController
{
    protected $orderModel;
    protected $milestoneModel;
    protected $revisionModel;
    protected $assetModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->milestoneModel = new MilestoneModel();
        $this->revisionModel = new RevisionModel();
        $this->assetModel = new OrderAssetModel();
    }

    public function index()
    {
        $orders = $this->orderModel->getAllWithDetails();

        foreach ($orders as &$order) {
            $order['progress'] = $this->milestoneModel->getProgress($order['id']);
        }

        $data = [
            'title' => 'Order Management',
            'active' => 'orders',
            'orders' => $orders,
        ];

        return view('admin/orders/index', $data);
    }

    public function show($id)
    {
        $order = $this->orderModel->getDetail($id);

        if (!$order) {
            return redirect()->to('/admin/orders')->with('error', 'Order tidak ditemukan.');
        }

        $milestones = $this->milestoneModel->getByOrder($id);
        $revisions = $this->revisionModel->getByOrder($id);
        $assets = $this->assetModel->getByOrder($id);
        $progress = $this->milestoneModel->getProgress($id);

        $data = [
            'title' => 'Order #' . $order['order_number'],
            'active' => 'orders',
            'order' => $order,
            'milestones' => $milestones,
            'revisions' => $revisions,
            'assets' => $assets,
            'progress' => $progress,
        ];

        return view('admin/orders/show', $data);
    }

    public function updateStatus($id)
    {
        $order = $this->orderModel->find($id);
        if (!$order) {
            return redirect()->to('/admin/orders')->with('error', 'Order tidak ditemukan.');
        }

        $status = $this->request->getPost('status');
        $updateData = ['status' => $status];

        if ($status === 'in_progress' && empty($order['started_at'])) {
            $updateData['started_at'] = date('Y-m-d H:i:s');
        }
        if ($status === 'completed') {
            $updateData['completed_at'] = date('Y-m-d H:i:s');
        }

        // Optional fields
        if ($this->request->getPost('staging_url')) {
            $updateData['staging_url'] = $this->request->getPost('staging_url');
        }
        if ($this->request->getPost('final_url')) {
            $updateData['final_url'] = $this->request->getPost('final_url');
        }
        if ($this->request->getPost('admin_notes')) {
            $updateData['admin_notes'] = $this->request->getPost('admin_notes');
        }

        $this->orderModel->update($id, $updateData);

        return redirect()->to('/admin/orders/' . $id)->with('success', 'Status order berhasil diupdate.');
    }

    public function updateMilestone($id)
    {
        $milestoneId = $this->request->getPost('milestone_id');
        $status = $this->request->getPost('milestone_status');

        $updateData = ['status' => $status];
        if ($status === 'completed') {
            $updateData['completed_at'] = date('Y-m-d H:i:s');
        }

        $this->milestoneModel->update($milestoneId, $updateData);

        return redirect()->to('/admin/orders/' . $id)->with('success', 'Milestone berhasil diupdate.');
    }
}
