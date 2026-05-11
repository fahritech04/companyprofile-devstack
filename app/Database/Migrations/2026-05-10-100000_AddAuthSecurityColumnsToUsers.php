<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Adds hardening columns for authentication:
 *  - verification_token / verification_token_expires_at (random token flow)
 *  - failed_login_attempts / locked_until (account lockout)
 *  - last_login_at / last_login_ip (audit)
 *  - password_changed_at (for future password-age policies)
 */
class AddAuthSecurityColumnsToUsers extends Migration
{
    public function up()
    {
        $existing = array_map('strtolower', $this->db->getFieldNames('users'));
        $fields   = [];

        if (!in_array('verification_token', $existing, true)) {
            $fields['verification_token'] = [
                'type'       => 'VARCHAR',
                'constraint' => 128,
                'null'       => true,
                'after'      => 'email_verified_at',
            ];
        }

        if (!in_array('verification_token_expires_at', $existing, true)) {
            $fields['verification_token_expires_at'] = [
                'type'  => 'DATETIME',
                'null'  => true,
                'after' => 'verification_token',
            ];
        }

        if (!in_array('failed_login_attempts', $existing, true)) {
            $fields['failed_login_attempts'] = [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'default'    => 0,
                'after'      => 'verification_token_expires_at',
            ];
        }

        if (!in_array('locked_until', $existing, true)) {
            $fields['locked_until'] = [
                'type'  => 'DATETIME',
                'null'  => true,
                'after' => 'failed_login_attempts',
            ];
        }

        if (!in_array('last_login_at', $existing, true)) {
            $fields['last_login_at'] = [
                'type'  => 'DATETIME',
                'null'  => true,
                'after' => 'locked_until',
            ];
        }

        if (!in_array('last_login_ip', $existing, true)) {
            $fields['last_login_ip'] = [
                'type'       => 'VARCHAR',
                'constraint' => 45,
                'null'       => true,
                'after'      => 'last_login_at',
            ];
        }

        if (!in_array('password_changed_at', $existing, true)) {
            $fields['password_changed_at'] = [
                'type'  => 'DATETIME',
                'null'  => true,
                'after' => 'last_login_ip',
            ];
        }

        if (!empty($fields)) {
            $this->forge->addColumn('users', $fields);
        }

        // Add index on verification_token for fast lookup
        if (isset($fields['verification_token'])) {
            try {
                $this->db->query('CREATE INDEX idx_users_verification_token ON users (verification_token)');
            } catch (\Throwable $e) {
                log_message('warning', 'Could not create idx_users_verification_token: ' . $e->getMessage());
            }
        }
    }

    public function down()
    {
        $existing = array_map('strtolower', $this->db->getFieldNames('users'));

        $columns = [
            'verification_token',
            'verification_token_expires_at',
            'failed_login_attempts',
            'locked_until',
            'last_login_at',
            'last_login_ip',
            'password_changed_at',
        ];

        foreach ($columns as $col) {
            if (in_array($col, $existing, true)) {
                $this->forge->dropColumn('users', $col);
            }
        }
    }
}
