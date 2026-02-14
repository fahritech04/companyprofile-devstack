<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\InvoiceModel;
use App\Models\OrderModel;

class BillingController extends BaseController
{
    protected $invoiceModel;
    protected $orderModel;

    public function __construct()
    {
        $this->invoiceModel = new InvoiceModel();
        $this->orderModel = new OrderModel();
    }

    /**
     * List all invoices for user
     */
    public function index()
    {
        $userId = session()->get('user_id');
        $invoices = $this->invoiceModel->getByUser($userId);

        $data = [
            'title' => 'Billing & Invoices',
            'invoices' => $invoices,
        ];

        return view('client/billing/index', $data);
    }

    /**
     * Show invoice detail
     */
    public function show($id)
    {
        $userId = session()->get('user_id');
        $invoice = $this->invoiceModel->select('invoices.*, orders.project_name, orders.order_number, orders.user_id')
            ->join('orders', 'orders.id = invoices.order_id', 'left')
            ->where('invoices.id', $id)
            ->first();

        if (!$invoice || $invoice['user_id'] != $userId) {
            return redirect()->to('/client/billing')->with('error', 'Invoice tidak ditemukan.');
        }

        $data = [
            'title' => 'Invoice #' . $invoice['invoice_number'],
            'invoice' => $invoice,
        ];

        return view('client/billing/show', $data);
    }

    /**
     * Upload payment proof
     */
    public function uploadProof($id)
    {
        $userId = session()->get('user_id');
        $invoice = $this->invoiceModel->select('invoices.*, orders.user_id')
            ->join('orders', 'orders.id = invoices.order_id', 'left')
            ->where('invoices.id', $id)
            ->first();

        if (!$invoice || $invoice['user_id'] != $userId) {
            return redirect()->to('/client/billing')->with('error', 'Invoice tidak ditemukan.');
        }

        $rules = [
            'payment_proof' => 'uploaded[payment_proof]|max_size[payment_proof,2048]|is_image[payment_proof]',
            'bank_name' => 'required|max_length[100]',
            'account_name' => 'required|max_length[255]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $file = $this->request->getFile('payment_proof');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/payments', $newName);

            $this->invoiceModel->update($id, [
                'payment_proof' => 'uploads/payments/' . $newName,
                'bank_name' => $this->request->getPost('bank_name'),
                'account_name' => $this->request->getPost('account_name'),
                'payment_method' => 'bank_transfer',
                'status' => 'pending_verification',
            ]);

            return redirect()->to('/client/billing/' . $id)->with('success', 'Bukti pembayaran berhasil diupload. Menunggu verifikasi admin.');
        }

        return redirect()->back()->with('error', 'Gagal upload bukti pembayaran.');
    }
}
