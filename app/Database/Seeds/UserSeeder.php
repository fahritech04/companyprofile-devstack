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
            'username'          => 'testuser',
            'email'             => 'test@example.com',
            'password'          => 'password123', // Raw password — Model akan hash via callback
            'first_name'        => 'Test',
            'last_name'         => 'User',
            'is_active'         => 1,
            'role'              => 'user',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'created_at'        => date('Y-m-d H:i:s'),
            'updated_at'        => date('Y-m-d H:i:s'),
        ];

        // Cek apakah user sudah ada
        $existing = $this->db->table('users')->where('email', $data['email'])->get()->getRow();
        if ($existing) {
            echo "Test user already exists. Skipping.\n";
            return;
        }

        try {
            $userModel->insert($data);
            echo "Test user created: {$data['email']} / password123\n";
        } catch (\Exception $e) {
            echo "Failed to create test user: " . $e->getMessage() . "\n";
        }
    }
}