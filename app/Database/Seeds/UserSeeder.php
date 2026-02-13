<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new User();

        $data = [
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => 'password123', // Raw password, let Model hash it
            'first_name' => 'Test',
            'last_name' => 'User',
            'is_active' => 1,
            'role' => 'user',
            'email_verified_at' => date('Y-m-d H:i:s'),
        ];

        // Check if user exists
        if ($userModel->where('email', $data['email'])->countAllResults() === 0) {
            $userModel->insert($data);
        }
    }
}