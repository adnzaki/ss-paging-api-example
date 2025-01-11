<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BaseTables extends Migration
{
    public function up()
    {
        $table = 'customers';
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'phone'      => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'address'    => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deleted_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable($table, true);
    }

    public function down()
    {
        //
    }
}
