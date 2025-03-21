<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBarangTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_barang' => ['type' => 'INT', 'auto_increment' => true],
            'kode_barang' => ['type' => 'VARCHAR', 'constraint' => 50, 'unique' => true],
            'nama_barang' => ['type' => 'VARCHAR', 'constraint' => 100],
            'kategori' => ['type' => 'ENUM', 'constraint' => ['medis', 'non_medis']],
            'stok' => ['type' => 'INT', 'default' => 0],
            'satuan' => ['type' => 'VARCHAR', 'constraint' => 50],
            'harga_satuan' => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,  // Ubah agar bisa NULL
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,  // Ubah agar bisa NULL
            ],

        ]);
        $this->forge->addPrimaryKey('id_barang');
        $this->forge->createTable('t_barang');
    }

    public function down()
    {
        $this->forge->dropTable('t_barang');
    }
}
