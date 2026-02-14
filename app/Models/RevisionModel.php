<?php

namespace App\Models;

use CodeIgniter\Model;

class RevisionModel extends Model
{
    protected $table = 'revisions';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'order_id',
        'user_id',
        'description',
        'page',
        'status',
        'admin_notes',
        'attachment',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Get revisions for an order
     */
    public function getByOrder(int $orderId)
    {
        return $this->select('revisions.*, users.first_name, users.last_name')
            ->join('users', 'users.id = revisions.user_id', 'left')
            ->where('revisions.order_id', $orderId)
            ->orderBy('revisions.created_at', 'DESC')
            ->findAll();
    }

    /**
     * Count pending revisions for an order
     */
    public function countPending(int $orderId): int
    {
        return $this->where('order_id', $orderId)
            ->where('status', 'pending')
            ->countAllResults();
    }
}
