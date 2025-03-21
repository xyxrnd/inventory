<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenerimaanBarangModel;
use App\Models\BarangModel;


class PenerimaanBarang extends BaseController
{
    protected $penerimaanModel;
    protected $barangModel;

    public function __construct()
    {
        $this->penerimaanModel = new PenerimaanBarangModel();
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $data = [
            'penerimaan' => $this->penerimaanModel->getAllPenerimaan(),
            'barang' => $this->barangModel->findAll()
        ];

        return view('admin/pbarang/index', $data);
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {
            $data = [
                'id_barang' => $this->request->getPost('id_barang'),
                'jumlah' => $this->request->getPost('jumlah'),
                'tanggal_terima' => $this->request->getPost('tanggal_terima'),
                'supplier' => $this->request->getPost('supplier'),
                'harga_total' => $this->request->getPost('harga_total')
            ];

            // Debugging: Tampilkan data sebelum insert
            print_r($data);
            exit; // Hentikan proses sementara untuk melihat output

            if ($this->penerimaanModel->insert($data)) {
                return redirect()->to('/admin/penerimaanbarang')->with('success', 'Data berhasil ditambahkan.');
            } else {
                return redirect()->to('/admin/penerimaanbarang')->with('error', 'Gagal menambahkan data.');
            }
        }
    }
}
