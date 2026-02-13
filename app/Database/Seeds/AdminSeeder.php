<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email' => 'admin@dev-stack.id',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'first_name' => 'Admin',
            'last_name' => 'DevStack',
            'is_active' => 1,
            'role' => 'admin',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // Check if admin already exists
        $existing = $this->db->table('users')->where('email', $data['email'])->get()->getRow();
        if ($existing) {
            echo "Admin user already exists. Skipping.\n";
            return;
        }

        $this->db->table('users')->insert($data);
        echo "Admin user created: admin@dev-stack.id / admin123\n";
    }
}
