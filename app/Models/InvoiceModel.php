<?php

namespace App\Models;

use CodeIgniter\Model;

class InvoiceModel extends Model
{
    protected $table = 'invoices';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'order_id',
        'invoice_number',
        'amount',
        'type',
        'status',
        'payment_method',
        'payment_proof',
        'bank_name',
        'account_name',
        'paid_at',
        'due_date',
        'notes',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Generate unique invoice number (INV-YYYY-NNNN)
     */
    public function generateInvoiceNumber(): string
    {
        $year = date('Y');
        $last = $this->like('invoice_number', "INV-{$year}-", 'after')
            ->orderBy('id', 'DESC')
            ->first();

        if ($last) {
            $lastNum = (int) substr($last['invoice_number'], -4);
            $nextNum = $lastNum + 1;
        } else {
            $nextNum = 1;
        }

        return sprintf("INV-%s-%04d", $year, $nextNum);
    }

    /**
     * Get invoices for a user (via orders)
     */
    public function getByUser(int $userId)
    {
        return $this->select('invoices.*, orders.project_name, orders.order_number')
            ->join('orders', 'orders.id = invoices.order_id', 'left')
            ->where('orders.user_id', $userId)
            ->orderBy('invoices.created_at', 'DESC')
            ->findAll();
    }

    /**
     * Get invoices for an order
     */
    public function getByOrder(int $orderId)
    {
        return $this->where('order_id', $orderId)
            ->orderBy('created_at', 'DESC')
            ->findAll();
    }

    /**
     * Calculate total revenue
     */
    public function getTotalRevenue(): float
    {
        $result = $this->selectSum('amount')
            ->where('status', 'paid')
            ->first();
        return (float) ($result['amount'] ?? 0);
    }
}
