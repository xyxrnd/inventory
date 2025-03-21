<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barangModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    // Menampilkan semua barang
    public function index()
    {
        $data['barang'] = $this->barangModel->findAll();
        return view('admin/barang/index', $data);
    }

    // Menampilkan form tambah barang
    public function create()
    {
        return view('admin/barang/tambah');
    }

    // Menyimpan data barang ke database
    public function store()
    {
        $this->barangModel->save([
            'kode_barang'  => $this->request->getPost('kode_barang'),
            'nama_barang'  => $this->request->getPost('nama_barang'),
            'kategori'     => $this->request->getPost('kategori'),
            'stok'         => $this->request->getPost('stok'),
            'satuan'       => $this->request->getPost('satuan'),
            'harga_satuan' => $this->request->getPost('harga_satuan')
        ]);

        return redirect()->to('/admin/barang');
    }

    // Menampilkan form edit barang
    public function edit($id)
    {
        $data['barang'] = $this->barangModel->find($id);
        return view('admin/barang/edit', $data);
    }

    // Menyimpan perubahan data barang
    public function update($id)
    {
        $this->barangModel->update($id, [
            'kode_barang'  => $this->request->getPost('kode_barang'),
            'nama_barang'  => $this->request->getPost('nama_barang'),
            'kategori'     => $this->request->getPost('kategori'),
            'stok'         => $this->request->getPost('stok'),
            'satuan'       => $this->request->getPost('satuan'),
            'harga_satuan' => $this->request->getPost('harga_satuan')
        ]);

        return redirect()->to('/admin/barang');
    }

    // Menghapus barang
    public function delete($id)
    {
        $this->barangModel->delete($id);
        return redirect()->to('/admin/barang');
    }
}
