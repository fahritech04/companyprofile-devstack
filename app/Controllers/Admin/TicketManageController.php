<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TicketModel;
use App\Models\TicketReplyModel;

class TicketManageController extends BaseController
{
    protected $ticketModel;
    protected $replyModel;

    public function __construct()
    {
        $this->ticketModel = new TicketModel();
        $this->replyModel = new TicketReplyModel();
    }

    public function index()
    {
        $tickets = $this->ticketModel->getAllWithDetails();

        $data = [
            'title' => 'Support Tickets',
            'active' => 'tickets',
            'tickets' => $tickets,
        ];

        return view('admin/tickets/index', $data);
    }

    public function show($id)
    {
        $ticket = $this->ticketModel->find($id);
        $replies = $this->replyModel->getByTicket($id);

        if (!$ticket) {
            return redirect()->to('/admin/tickets')->with('error', 'Ticket tidak ditemukan.');
        }

        $data = [
            'title' => 'Ticket #' . $ticket['ticket_number'],
            'active' => 'tickets',
            'ticket' => $ticket,
            'replies' => $replies,
        ];

        return view('admin/tickets/show', $data);
    }

    public function reply($id)
    {
        $ticket = $this->ticketModel->find($id);
        if (!$ticket) {
            return redirect()->to('/admin/tickets')->with('error', 'Ticket tidak ditemukan.');
        }

        $userId = session()->get('user_id');

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

        $this->ticketModel->update($id, ['status' => 'replied']);

        return redirect()->to('/admin/tickets/' . $id)->with('success', 'Balasan berhasil dikirim.');
    }

    public function close($id)
    {
        $this->ticketModel->update($id, ['status' => 'closed']);
        return redirect()->to('/admin/tickets/' . $id)->with('success', 'Ticket ditutup.');
    }
}
