<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name'  => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'last_name'   => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true,
            ],
            'password'    => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'currency'    => [
                'type'       => 'ENUM',
                'constraint' => ['MAD', 'USD', 'EUR', 'AED', 'GBP'],
                'default'    => 'MAD',
            ],
            'budget'      => [
                'type'       => 'DECIMAL',
                'constraint' => '15,2',
                'null'       => true,
            ],
            'created_at'  => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'  => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
