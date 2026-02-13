<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ServiceModel;
use App\Models\PortfolioModel;
use App\Models\InquiryModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'totalServices' => (new ServiceModel())->countAllResults(),
            'totalPortfolios' => (new PortfolioModel())->countAllResults(),
            'totalInquiries' => (new InquiryModel())->countAllResults(),
            'unreadInquiries' => (new InquiryModel())->where('is_read', 0)->countAllResults(),
            'recentInquiries' => (new InquiryModel())->orderBy('created_at', 'DESC')->findAll(5),
        ];

        return view('admin/dashboard', $data);
    }
}
