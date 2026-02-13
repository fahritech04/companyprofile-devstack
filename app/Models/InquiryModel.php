<?php

namespace App\Models;

use CodeIgniter\Model;

class InquiryModel extends Model
{
    protected $table = 'inquiries';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'is_read',
        'replied_at'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'name' => 'required|max_length[255]',
        'email' => 'required|valid_email|max_length[255]',
        'message' => 'required',
    ];

    public function getUnread()
    {
        return $this->where('is_read', 0)->orderBy('created_at', 'DESC')->findAll();
    }

    public function countUnread()
    {
        return $this->where('is_read', 0)->countAllResults();
    }
}
