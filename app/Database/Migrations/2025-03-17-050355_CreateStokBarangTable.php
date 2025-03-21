<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStokBarangTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_stok' => ['type' => 'INT', 'auto_increment' => true],
            'id_barang' => ['type' => 'INT'],
            'jumlah_stok' => ['type' => 'INT'],
            'expired_date' => ['type' => 'DATE', 'null' => true],
            'lokasi' => ['type' => 'VARCHAR', 'constraint' => 100],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,  // Ubah agar bisa NULL
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,  // Ubah agar bisa NULL
            ],

        ]);
        $this->forge->addPrimaryKey('id_stok');
        $this->forge->addForeignKey('id_barang', 't_barang', 'id_barang', 'CASCADE', 'CASCADE');
        $this->forge->createTable('t_stok_barang');
    }

    public function down()
    {
        $this->forge->dropTable('t_stok_barang');
    }
}
