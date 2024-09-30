<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersMigration extends Migration
{
    protected $DBGroup = 'default';
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'unique' => true
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'role' => [
                'type' => 'TINYINT',
                'constraint' => 2,
                'unsigned' => true
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],

            'updated_at' => [
                'type' => 'TIMESTAMP',
            ]

        ]);

        $this->forge->addKey('id', true);
        //foreign key
        $this->forge->addForeignKey('role', 'roles', 'id');
        //create users table
        $this->forge->createTable('users');

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
