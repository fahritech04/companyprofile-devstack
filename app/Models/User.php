<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'is_active',
        'role',
        'email_verified_at'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [
        'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
        'email' => 'required|valid_email|max_length[100]|is_unique[users.email]',
        'password' => 'required|min_length[8]',
        'first_name' => 'max_length[50]',
        'last_name' => 'max_length[50]',
    ];
    protected $validationMessages = [
        'username' => [
            'required' => 'Username is required.',
            'min_length' => 'Username must be at least 3 characters long.',
            'is_unique' => 'This username is already taken.',
        ],
        'email' => [
            'required' => 'Email is required.',
            'valid_email' => 'Please enter a valid email address.',
            'is_unique' => 'This email is already registered.',
        ],
        'password' => [
            'required' => 'Password is required.',
            'min_length' => 'Password must be at least 8 characters long.',
        ],
    ];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = ['hashPassword'];
    protected $afterInsert = [];
    protected $beforeUpdate = ['hashPassword'];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    /**
     * Hash password before saving to database
     */
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}