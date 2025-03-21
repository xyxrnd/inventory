<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Tambah Barang<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Barang</h1>
    </div> -->
    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Tambah Data Barang</h1>
            </div>
            <div class="col-md-6">
                <div class="text-right">
                    <a href="<?= base_url('admin/barang') ?>" class="btn btn-primary"><i class="fa fa-arrow-left fa-sm"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/barang/store') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label>Kode Barang</label>
                        <input type="text" name="kode_barang" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Kategori</label>
                        <select name="kategori" class="form-control">
                            <option value="medis">Medis</option>
                            <option value="non_medis">Non Medis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Stok</label>
                        <input type="number" name="stok" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Satuan</label>
                        <input type="text" name="satuan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Harga Satuan</label>
                        <input type="text" name="harga_satuan" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>