<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RemoveShieldTables extends Migration
{
    public function up()
    {
        $this->forge->dropTable('auth_groups_users');
        $this->forge->dropTable('auth_identities');
        $this->forge->dropTable('auth_logins');
        $this->forge->dropTable('auth_permissions_users');
        $this->forge->dropTable('auth_remember_tokens');
        $this->forge->dropTable('auth_token_logins');
        $this->forge->dropTable('users');
    }

    public function down()
    {
        //
    }
}
