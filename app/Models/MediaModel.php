<?php

namespace App\Models;

use CodeIgniter\Model;

class MediaModel extends Model
{
    protected $table            = 'media';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    protected $allowedFields = [
        'user_id',
        'website_id',
        'original_name',
        'filename',
        'path',
        'mime_type',
        'size_bytes',
        'width',
        'height',
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'user_id'       => 'required|is_natural_no_zero',
        'original_name' => 'required|max_length[255]',
        'filename'      => 'required|max_length[255]',
        'path'          => 'required|max_length[500]',
        'mime_type'     => 'required|max_length[100]',
        'size_bytes'    => 'required|is_natural',
    ];

    /**
     * Get all media for a user, newest first.
     */
    public function getByUser(int $userId, int $limit = 100, int $offset = 0): array
    {
        return $this->where('user_id', $userId)
            ->orderBy('created_at', 'DESC')
            ->findAll($limit, $offset);
    }

    public function findOwned(int $id, int $userId): ?array
    {
        $row = $this->find($id);
        if (!$row || (int) $row['user_id'] !== $userId) {
            return null;
        }
        return $row;
    }

    /**
     * Total storage used by a user in bytes.
     */
    public function totalBytesForUser(int $userId): int
    {
        $row = $this->select('COALESCE(SUM(size_bytes), 0) AS total')
            ->where('user_id', $userId)
            ->first();
        return (int) ($row['total'] ?? 0);
    }
}
