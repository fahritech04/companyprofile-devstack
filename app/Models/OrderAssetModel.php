<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderAssetModel extends Model
{
    protected $table = 'order_assets';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'order_id',
        'file_name',
        'file_path',
        'file_type',
        'file_size',
        'uploaded_by',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    /**
     * Get assets for an order
     */
    public function getByOrder(int $orderId)
    {
        return $this->where('order_id', $orderId)
            ->orderBy('created_at', 'DESC')
            ->findAll();
    }
}
