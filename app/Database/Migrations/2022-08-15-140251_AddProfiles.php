<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProfiles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'profile_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_account_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => 320,
            ],
            'nationality' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'date_of_birth' => [
                'type' => 'DATETIME'
            ],
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 320
            ],
            'ubd_programme' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'hobby' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'self_description' => [
                'type'       => 'VARCHAR',
                'constraint' => 320,
            ],
            'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('profile_id', true);
        $this->forge->addForeignKey('user_account_id', 'user_account', 'user_account_id');
        $this->forge->createTable('profile');
    }

    public function down()
    {
        $this->forge->dropTable('profile');
    }
}
