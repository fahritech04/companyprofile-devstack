<?php

namespace App\Models;

use CodeIgniter\Model;

class TicketModel extends Model
{
    protected $table = 'tickets';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'order_id',
        'user_id',
        'ticket_number',
        'subject',
        'status',
        'priority',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Generate unique ticket number (TKT-YYYY-NNNN)
     */
    public function generateTicketNumber(): string
    {
        $year = date('Y');
        $last = $this->like('ticket_number', "TKT-{$year}-", 'after')
            ->orderBy('id', 'DESC')
            ->first();

        if ($last) {
            $lastNum = (int) substr($last['ticket_number'], -4);
            $nextNum = $lastNum + 1;
        } else {
            $nextNum = 1;
        }

        return sprintf("TKT-%s-%04d", $year, $nextNum);
    }

    /**
     * Get tickets for a user
     */
    public function getByUser(int $userId)
    {
        return $this->select('tickets.*, orders.project_name')
            ->join('orders', 'orders.id = tickets.order_id', 'left')
            ->where('tickets.user_id', $userId)
            ->orderBy('tickets.updated_at', 'DESC')
            ->findAll();
    }

    /**
     * Get all tickets with user info (for admin)
     */
    public function getAllWithDetails()
    {
        return $this->select('tickets.*, users.first_name, users.last_name, users.email as user_email, orders.project_name')
            ->join('users', 'users.id = tickets.user_id', 'left')
            ->join('orders', 'orders.id = tickets.order_id', 'left')
            ->orderBy('tickets.updated_at', 'DESC')
            ->findAll();
    }
}
