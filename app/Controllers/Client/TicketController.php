<?php

namespace App\Controllers\Client;

use App\Controllers\BaseController;
use App\Models\TicketModel;
use App\Models\TicketReplyModel;
use App\Models\OrderModel;

class TicketController extends BaseController
{
    protected $ticketModel;
    protected $replyModel;
    protected $orderModel;

    public function __construct()
    {
        $this->ticketModel = new TicketModel();
        $this->replyModel = new TicketReplyModel();
        $this->orderModel = new OrderModel();
    }

    /**
     * List user's tickets
     */
    public function index()
    {
        $userId = session()->get('user_id');
        $tickets = $this->ticketModel->getByUser($userId);

        $data = [
            'title' => 'Support Tickets',
            'tickets' => $tickets,
        ];

        return view('client/tickets/index', $data);
    }

    /**
     * Show ticket form
     */
    public function create()
    {
        $userId = session()->get('user_id');
        $orders = $this->orderModel->getByUser($userId);

        $data = [
            'title' => 'New Ticket',
            'orders' => $orders,
        ];

        return view('client/tickets/create', $data);
    }

    /**
     * Store new ticket
     */
    public function store()
    {
        $rules = [
            'subject' => 'required|min_length[5]|max_length[255]',
            'message' => 'required|min_length[10]',
            'priority' => 'required|in_list[low,medium,high]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userId = session()->get('user_id');

        // Create ticket
        $ticketId = $this->ticketModel->insert([
            'order_id' => $this->request->getPost('order_id') ?: null,
            'user_id' => $userId,
            'ticket_number' => $this->ticketModel->generateTicketNumber(),
            'subject' => $this->request->getPost('subject'),
            'status' => 'open',
            'priority' => $this->request->getPost('priority'),
        ]);

        // Create first reply (the initial message)
        $this->replyModel->insert([
            'ticket_id' => $ticketId,
            'user_id' => $userId,
            'message' => $this->request->getPost('message'),
        ]);

        return redirect()->to('/client/tickets/' . $ticketId)->with('success', 'Ticket berhasil dibuat!');
    }

    /**
     * Show ticket detail with replies
     */
    public function show($id)
    {
        $userId = session()->get('user_id');
        $ticket = $this->ticketModel->find($id);

        if (!$ticket || $ticket['user_id'] != $userId) {
            return redirect()->to('/client/tickets')->with('error', 'Ticket tidak ditemukan.');
        }

        $replies = $this->replyModel->getByTicket($id);

        $data = [
            'title' => 'Ticket #' . $ticket['ticket_number'],
            'ticket' => $ticket,
            'replies' => $replies,
        ];

        return view('client/tickets/show', $data);
    }

    /**
     * Reply to ticket
     */
    public function reply($id)
    {
        $userId = session()->get('user_id');
        $ticket = $this->ticketModel->find($id);

        if (!$ticket || $ticket['user_id'] != $userId) {
            return redirect()->to('/client/tickets')->with('error', 'Ticket tidak ditemukan.');
        }

        $rules = [
            'message' => 'required|min_length[5]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Handle attachment
        $attachmentPath = null;
        $file = $this->request->getFile('attachment');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/tickets/' . $id, $newName);
            $attachmentPath = 'uploads/tickets/' . $id . '/' . $newName;
        }

        $this->replyModel->insert([
            'ticket_id' => $id,
            'user_id' => $userId,
            'message' => $this->request->getPost('message'),
            'attachment' => $attachmentPath,
        ]);

        // Re-open ticket if it was closed
        if ($ticket['status'] === 'closed' || $ticket['status'] === 'replied') {
            $this->ticketModel->update($id, ['status' => 'open']);
        }

        return redirect()->to('/client/tickets/' . $id)->with('success', 'Balasan berhasil dikirim!');
    }
}
