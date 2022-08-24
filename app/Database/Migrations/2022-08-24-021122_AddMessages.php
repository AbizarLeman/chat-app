<?php

namespace App\Database\Migrations\AddMessages;

use CodeIgniter\Database\Migration;

class AddMessages extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'message_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'sender_user_account_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'receiver_user_account_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'message' => [
                'type'       => 'VARCHAR',
                'constraint' => 320,
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('message_id', true);
        $this->forge->createTable('message');
    }

    public function down()
    {
        $this->forge->dropTable('message');
    }
}
