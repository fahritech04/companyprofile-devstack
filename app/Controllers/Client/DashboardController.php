<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\InvoiceModel;
use App\Models\TicketModel;
use App\Models\MilestoneModel;

class DashboardController extends BaseController
{
    protected $orderModel;
    protected $invoiceModel;
    protected $ticketModel;
    protected $milestoneModel;

    public function __construct()
    {
        $this->orderModel = new OrderModel();
        $this->invoiceModel = new InvoiceModel();
        $this->ticketModel = new TicketModel();
        $this->milestoneModel = new MilestoneModel();
    }

    public function index()
    {
        $userId = session()->get('user_id');

        // Get user's orders
        $orders = $this->orderModel->getByUser($userId);

        // Get recent invoices
        $invoices = $this->invoiceModel->getByUser($userId);
        $unpaidInvoices = array_filter($invoices, fn($inv) => $inv['status'] === 'unpaid' || $inv['status'] === 'pending_verification');

        // Get open tickets
        $tickets = $this->ticketModel->getByUser($userId);
        $openTickets = array_filter($tickets, fn($t) => $t['status'] !== 'closed');

        // Calculate stats
        $totalProjects = count($orders);
        $activeProjects = count(array_filter($orders, fn($o) => in_array($o['status'], ['paid', 'in_progress', 'review', 'revision'])));
        $completedProjects = count(array_filter($orders, fn($o) => $o['status'] === 'completed'));

        // Get progress for active orders
        foreach ($orders as &$order) {
            $order['progress'] = $this->milestoneModel->getProgress($order['id']);
        }

        $data = [
            'title' => 'Dashboard',
            'orders' => $orders,
            'invoices' => $invoices,
            'unpaidInvoices' => $unpaidInvoices,
            'openTickets' => $openTickets,
            'totalProjects' => $totalProjects,
            'activeProjects' => $activeProjects,
            'completedProjects' => $completedProjects,
        ];

        return view('client/dashboard', $data);
    }
}
