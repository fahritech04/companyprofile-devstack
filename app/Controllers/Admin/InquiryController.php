<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\InquiryModel;

class InquiryController extends BaseController
{
    protected $inquiryModel;

    public function __construct()
    {
        $this->inquiryModel = new InquiryModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Inquiries',
            'subtitle' => 'Messages from your contact form',
            'active' => 'inquiries',
            'inquiries' => $this->inquiryModel->orderBy('created_at', 'DESC')->findAll(),
        ];
        return view('admin/inquiries/index', $data);
    }

    public function show($id)
    {
        $inquiry = $this->inquiryModel->find($id);
        if (!$inquiry) {
            return redirect()->to('/admin/inquiries')->with('error', 'Inquiry not found.');
        }

        // Mark as read
        if (!$inquiry['is_read']) {
            $this->inquiryModel->update($id, ['is_read' => 1]);
            $inquiry['is_read'] = 1;
        }

        $data = [
            'title' => 'View Inquiry',
            'subtitle' => 'Message from ' . $inquiry['name'],
            'active' => 'inquiries',
            'inquiry' => $inquiry,
        ];
        return view('admin/inquiries/show', $data);
    }

    public function delete($id)
    {
        $inquiry = $this->inquiryModel->find($id);
        if (!$inquiry) {
            return redirect()->to('/admin/inquiries')->with('error', 'Inquiry not found.');
        }

        $this->inquiryModel->delete($id);
        return redirect()->to('/admin/inquiries')->with('success', 'Inquiry deleted successfully!');
    }
}
