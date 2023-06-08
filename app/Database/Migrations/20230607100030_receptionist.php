<?php

namespace App\Database\Migrations;
//use CodeIgniter\Database\Migration;
class Receptionist extends \CodeIgniter\Database\Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'default'    => 'receptionist'
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('receptionist');
    }

    public function down()
    {
        $this->forge->dropTable('receptionist');
    }
}
