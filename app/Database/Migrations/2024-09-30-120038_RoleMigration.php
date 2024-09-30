<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RoleMigration extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'TINYINT',
                    'constraint' => 2,
                    'unsigned' => true,
                    'auto_increment' => false
                ],

                'role_name' => [
                    'type' => 'VARCHAR',
                    'constraint' => 30,
                ],

                'created_at' => [
                    'type' => 'TIMESTAMP',
                ],
            ]
        );

        $this->forge->addKey('id', true);
        $this->forge->addKey('role_name');
        $this->forge->createTable('roles');
    }

    public function down()
    {
        $this->forge->dropTable('roles');
    }
}
