<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CommunicationSeeder extends Seeder
{
    public function run()
    {
        $channelModel = new \App\Models\ChannelModel();

        // Check if welcome channel exists
        if (!$channelModel->where('name', 'Welcome')->first()) {
            $channelModel->insert([
                'name' => 'Welcome',
                'description' => 'General discussion and welcome channel for new members.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }

        // Add another channel
        if (!$channelModel->where('name', 'Announcements')->first()) {
            $channelModel->insert([
                'name' => 'Announcements',
                'description' => 'Important updates and news from DevStack.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
