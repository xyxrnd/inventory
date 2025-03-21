<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenerimaanBarangTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penerimaan' => ['type' => 'INT', 'auto_increment' => true],
            'id_barang' => ['type' => 'INT'],
            'jumlah' => ['type' => 'INT'],
            'tanggal_terima' => ['type' => 'DATE'],
            'supplier' => ['type' => 'VARCHAR', 'constraint' => 100],
            'harga_total' => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,  // Ubah agar bisa NULL
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,  // Ubah agar bisa NULL
            ],

        ]);
        $this->forge->addPrimaryKey('id_penerimaan');
        $this->forge->addForeignKey('id_barang', 't_barang', 'id_barang', 'CASCADE', 'CASCADE');
        $this->forge->createTable('t_penerimaan_barang');
    }

    public function down()
    {
        $this->forge->dropTable('t_penerimaan_barang');
    }
}
