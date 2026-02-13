<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class TestAuth extends BaseController
{
    public function reset_user()
    {
        $model = new User();
        $email = 'test@example.com';

        // Delete existing
        $model->where('email', $email)->delete();

        // Create new
        $data = [
            'username' => 'testuser',
            'email' => $email,
            'password' => 'password123', // Raw password, Model will hash it
            'first_name' => 'Test',
            'last_name' => 'User',
            'is_active' => 1,
            'role' => 'user',
            'email_verified_at' => date('Y-m-d H:i:s'),
        ];

        $model->insert($data);

        return "User reset with Model. Try logging in with test@example.com / password123";
    }
}
