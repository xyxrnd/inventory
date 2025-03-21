<?php

namespace App\Models;

use CodeIgniter\Model;

class PenerimaanBarangModel extends Model
{
    protected $table = 't_penerimaan_barang';
    protected $primaryKey = 'id_penerimaan';
    protected $allowedFields = ['id_barang', 'jumlah', 'tanggal_terima', 'supplier', 'harga_total'];

    public function getAllPenerimaan()
    {
        return $this->select('t_penerimaan_barang.*, t_barang.nama_barang')
            ->join('t_barang', 't_barang.id_barang = t_penerimaan_barang.id_barang')
            ->orderBy('t_penerimaan_barang.tanggal_terima', 'DESC')
            ->findAll();
    }
}
