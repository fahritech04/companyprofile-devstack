<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\RevisionModel;

class RevisionController extends BaseController
{
    protected $orderModel;
    protected $revisionModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->revisionModel = new RevisionModel();
    }

    /**
     * Submit a revision request
     */
    public function store($orderId)
    {
        $userId = session()->get('user_id');
        $order = $this->orderModel->find($orderId);

        if (!$order || $order['user_id'] != $userId) {
            return redirect()->back()->with('error', 'Order tidak ditemukan.');
        }

        if (!in_array($order['status'], ['review', 'in_progress'])) {
            return redirect()->back()->with('error', 'Revisi hanya bisa saat status project sedang review atau in progress.');
        }

        $rules = [
            'description' => 'required|min_length[10]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Handle attachment
        $attachmentPath = null;
        $file = $this->request->getFile('attachment');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/revisions/' . $orderId, $newName);
            $attachmentPath = 'uploads/revisions/' . $orderId . '/' . $newName;
        }

        $this->revisionModel->insert([
            'order_id' => $orderId,
            'user_id' => $userId,
            'description' => $this->request->getPost('description'),
            'page' => $this->request->getPost('page'),
            'status' => 'pending',
            'attachment' => $attachmentPath,
        ]);

        // Update order status to revision
        $this->orderModel->update($orderId, ['status' => 'revision']);

        return redirect()->to('/client/orders/' . $orderId)->with('success', 'Permintaan revisi berhasil dikirim!');
    }
}
