<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateServicePackagesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'category' => [
                'type' => 'ENUM',
                'constraint' => ['website', 'mobile', 'consulting'],
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '12,2',
                'default' => 0,
            ],
            'is_custom_price' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'features' => [
                'type' => 'TEXT',
                'null' => true,
                'comment' => 'JSON array of features',
            ],
            'duration_days' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 30,
            ],
            'max_revisions' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 3,
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1,
            ],
            'sort_order' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('category');
        $this->forge->addKey('slug');
        $this->forge->addKey('is_active');
        $this->forge->createTable('service_packages');
    }

    public function down()
    {
        $this->forge->dropTable('service_packages');
    }
}
