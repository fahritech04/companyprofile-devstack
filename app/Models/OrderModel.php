<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'user_id',
        'package_id',
        'order_number',
        'project_name',
        'brief',
        'reference_urls',
        'target_audience',
        'status',
        'agreed_price',
        'deadline',
        'started_at',
        'completed_at',
        'staging_url',
        'final_url',
        'admin_notes',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Generate unique order number (DS-YYYY-NNNN)
     */
    public function generateOrderNumber(): string
    {
        $year = date('Y');
        $last = $this->like('order_number', "DS-{$year}-", 'after')
            ->orderBy('id', 'DESC')
            ->first();

        if ($last) {
            $lastNum = (int) substr($last['order_number'], -4);
            $nextNum = $lastNum + 1;
        } else {
            $nextNum = 1;
        }

        return sprintf("DS-%s-%04d", $year, $nextNum);
    }

    /**
     * Get orders for a specific user with package info
     */
    public function getByUser(int $userId)
    {
        return $this->select('orders.*, service_packages.name as package_name, service_packages.category')
            ->join('service_packages', 'service_packages.id = orders.package_id', 'left')
            ->where('orders.user_id', $userId)
            ->orderBy('orders.created_at', 'DESC')
            ->findAll();
    }

    /**
     * Get order detail with package and user info
     */
    public function getDetail(int $orderId)
    {
        return $this->select('orders.*, service_packages.name as package_name, service_packages.category, service_packages.max_revisions, users.first_name, users.last_name, users.email as user_email')
            ->join('service_packages', 'service_packages.id = orders.package_id', 'left')
            ->join('users', 'users.id = orders.user_id', 'left')
            ->where('orders.id', $orderId)
            ->first();
    }

    /**
     * Get all orders with related info (for admin)
     */
    public function getAllWithDetails()
    {
        return $this->select('orders.*, service_packages.name as package_name, service_packages.category, users.first_name, users.last_name, users.email as user_email')
            ->join('service_packages', 'service_packages.id = orders.package_id', 'left')
            ->join('users', 'users.id = orders.user_id', 'left')
            ->orderBy('orders.created_at', 'DESC')
            ->findAll();
    }

    /**
     * Count orders by status
     */
    public function countByStatus(string $status = null)
    {
        if ($status) {
            return $this->where('status', $status)->countAllResults();
        }
        return $this->countAllResults();
    }
}
