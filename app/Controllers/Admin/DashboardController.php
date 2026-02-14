<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PortfolioModel;
use App\Models\OrderModel;
use App\Models\InvoiceModel;
use App\Models\TicketModel;
use App\Models\MilestoneModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $orderModel = new OrderModel();
        $invoiceModel = new InvoiceModel();
        $ticketModel = new TicketModel();
        $milestoneModel = new MilestoneModel();

        // SaaS stats
        $orders = $orderModel->getAllWithDetails();
        foreach ($orders as &$order) {
            $order['progress'] = $milestoneModel->getProgress($order['id']);
        }

        $recentOrders = array_slice($orders, 0, 5);
        $activeOrders = count(array_filter($orders, fn($o) => in_array($o['status'], ['paid', 'in_progress', 'review', 'revision'])));
        $pendingTickets = $ticketModel->where('status', 'open')->countAllResults();
        $totalRevenue = $invoiceModel->getTotalRevenue();
        $pendingInvoices = $invoiceModel->where('status', 'pending_verification')->countAllResults();

        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'totalPortfolios' => (new PortfolioModel())->countAllResults(),
            // SaaS stats
            'totalOrders' => count($orders),
            'activeOrders' => $activeOrders,
            'totalRevenue' => $totalRevenue,
            'pendingTickets' => $pendingTickets,
            'pendingInvoices' => $pendingInvoices,
            'recentOrders' => $recentOrders,
        ];

        return view('admin/dashboard', $data);
    }
}
