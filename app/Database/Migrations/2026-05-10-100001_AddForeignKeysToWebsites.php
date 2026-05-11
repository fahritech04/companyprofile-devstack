<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Adds referential integrity to the `websites` table.
 *
 * Historical note: this table was originally created by
 * 2025-11-08-210000_CreateSubscriptionsTable.php — a legacy filename from
 * when we briefly considered calling these records "subscriptions". The
 * table name has always been `websites`; only the PHP class/filename was
 * misleading. We do not rename the old migration because doing so would
 * break the `migrations` tracking table on existing installs. Instead,
 * we layer FK constraints on top here.
 */
class AddForeignKeysToWebsites extends Migration
{
    public function up()
    {
        // Check if table exists before adding constraints
        $tables = $this->db->query("SHOW TABLES LIKE 'websites'")->getResult();
        if (empty($tables)) {
            log_message('info', 'websites table does not exist yet, skipping FK migration');
            return;
        }

        // Wrap each FK in its own try/catch so a second run (where FK already
        // exists) is idempotent and does not abort the whole migration.
        try {
            $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE', 'fk_websites_user');
            $this->forge->processIndexes('websites');
        } catch (\Throwable $e) {
            // Fall back to raw SQL if processIndexes isn't applicable
            try {
                $this->db->query(
                    'ALTER TABLE websites
                     ADD CONSTRAINT fk_websites_user
                     FOREIGN KEY (user_id) REFERENCES users(id)
                     ON DELETE CASCADE ON UPDATE CASCADE'
                );
            } catch (\Throwable $inner) {
                log_message('warning', 'fk_websites_user may already exist: ' . $inner->getMessage());
            }
        }

        // order_id → orders(id) only if the orders table exists
        $ordersExists = $this->db->query("SHOW TABLES LIKE 'orders'")->getResult();
        if (!empty($ordersExists)) {
            try {
                $this->db->query(
                    'ALTER TABLE websites
                     ADD CONSTRAINT fk_websites_order
                     FOREIGN KEY (order_id) REFERENCES orders(id)
                     ON DELETE SET NULL ON UPDATE CASCADE'
                );
            } catch (\Throwable $e) {
                log_message('warning', 'fk_websites_order may already exist: ' . $e->getMessage());
            }
        }
    }

    public function down()
    {
        try {
            $this->db->query('ALTER TABLE websites DROP FOREIGN KEY fk_websites_user');
        } catch (\Throwable $e) {
            // ignore
        }

        try {
            $this->db->query('ALTER TABLE websites DROP FOREIGN KEY fk_websites_order');
        } catch (\Throwable $e) {
            // ignore
        }
    }
}
