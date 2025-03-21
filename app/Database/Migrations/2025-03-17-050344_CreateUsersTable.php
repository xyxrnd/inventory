<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => ['type' => 'INT', 'auto_increment' => true],
            'nama' => ['type' => 'VARCHAR', 'constraint' => 100],
            'username' => ['type' => 'VARCHAR', 'constraint' => 50, 'unique' => true],
            'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            'role' => ['type' => 'ENUM', 'constraint' => ['admin_logistik', 'unit_medis', 'unit_non_medis']],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,  // Ubah agar bisa NULL
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,  // Ubah agar bisa NULL
            ],
        ]);
        $this->forge->addPrimaryKey('id_user');
        $this->forge->createTable('t_user');
    }

    public function down()
    {
        $this->forge->dropTable('t_user');
    }
}
