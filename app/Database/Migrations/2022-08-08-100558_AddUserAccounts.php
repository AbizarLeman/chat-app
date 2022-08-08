<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserAccounts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_account_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('user_account_id', true);
        $this->forge->createTable('user_account');
    }

    public function down()
    {
        $this->forge->dropTable('user_account');
    }
}
