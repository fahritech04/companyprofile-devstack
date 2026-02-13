<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InquiryModel;

class ContactController extends BaseController
{
    public function submit()
    {
        $rules = [
            'name' => 'required|max_length[255]',
            'email' => 'required|valid_email|max_length[255]',
            'message' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Please fill in all required fields correctly.');
        }

        $inquiryModel = new InquiryModel();
        $inquiryModel->insert([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'subject' => $this->request->getPost('subject'),
            'message' => $this->request->getPost('message'),
        ]);

        return redirect()->to('/contact')->with('success', 'Thank you! Your message has been sent.');
    }
}
