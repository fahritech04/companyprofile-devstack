<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UnverifiedUserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'unverified',
            'email' => 'unverified@example.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'first_name' => 'Unverified',
            'last_name' => 'User',
            'is_active' => 1,
            'email_verified_at' => null, // Email not verified
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // Using Query Builder to insert
        $this->db->table('users')->insert($data);
    }
}