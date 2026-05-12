<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Stores user-uploaded media (images used by blocks).
 *
 * Files live under writable/uploads/user_{user_id}/{filename};
 * the `path` column holds the path relative to writable/uploads,
 * and `url` is regenerated from base_url('uploads/...') at read time.
 */
class CreateMediaTable extends Migration
{
    public function up()
    {
        $tables = $this->db->query("SHOW TABLES LIKE 'media'")->getResult();
        if (!empty($tables)) {
            log_message('info', 'media table already exists, skipping');
            return;
        }

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'website_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'original_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'filename' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'path' => [
                'type'       => 'VARCHAR',
                'constraint' => 500,
            ],
            'mime_type' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'size_bytes' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'width' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'height' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('user_id');
        $this->forge->addKey('website_id');
        $this->forge->createTable('media');

        // FK to users (optional — skip if strict FK isn't available)
        try {
            $this->db->query(
                'ALTER TABLE media
                 ADD CONSTRAINT fk_media_user
                 FOREIGN KEY (user_id) REFERENCES users(id)
                 ON DELETE CASCADE ON UPDATE CASCADE'
            );
        } catch (\Throwable $e) {
            log_message('warning', 'fk_media_user skipped: ' . $e->getMessage());
        }
    }

    public function down()
    {
        $this->forge->dropTable('media', true);
    }
}
