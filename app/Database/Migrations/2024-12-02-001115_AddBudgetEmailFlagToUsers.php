<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBudgetEmailFlagToUsers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users', [
            'budget_email_sent' => [
                'type' => 'BOOLEAN',
                'default' => false,
                'null' => false,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'budget_email_sent');
    }
}
