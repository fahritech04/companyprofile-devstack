<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'messages';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['channel_id', 'user_id', 'content'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'channel_id' => 'required|integer',
        'user_id' => 'required|integer',
        'content' => 'required',
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Relationships
    public function getMessagesWithUser($channelId)
    {
        return $this->select('messages.*, users.username, users.first_name, users.last_name')
            ->join('users', 'users.id = messages.user_id')
            ->where('channel_id', $channelId)
            ->orderBy('created_at', 'ASC')
            ->findAll();
    }
}
