<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'key_name' => 'company_name',
                'value' => 'DevStack',
                'type' => 'text'
            ],
            [
                'key_name' => 'company_email',
                'value' => 'hello@dev-stack.id',
                'type' => 'text'
            ],
            [
                'key_name' => 'company_phone',
                'value' => '+62 812 3456 7890',
                'type' => 'text'
            ],
            [
                'key_name' => 'company_address',
                'value' => 'Jl. Teknologi No. 1, Jakarta Selatan',
                'type' => 'text'
            ],
            [
                'key_name' => 'meta_title',
                'value' => 'DevStack - Digital Solutions',
                'type' => 'text'
            ],
            [
                'key_name' => 'meta_description',
                'value' => 'Leading enterprise solutions for digital transformation.',
                'type' => 'text'
            ],
            [
                'key_name' => 'social_instagram',
                'value' => 'https://instagram.com/devstack',
                'type' => 'text'
            ],
            [
                'key_name' => 'social_linkedin',
                'value' => 'https://linkedin.com/company/devstack',
                'type' => 'text'
            ],
            [
                'key_name' => 'social_github',
                'value' => 'https://github.com/devstack',
                'type' => 'text'
            ],
            [
                'key_name' => 'social_whatsapp',
                'value' => 'https://wa.me/6281234567890',
                'type' => 'text'
            ],
        ];

        // Using ignore() to prevent errors if keys already exist
        $this->db->table('settings')->ignore(true)->insertBatch($data);
    }
}
