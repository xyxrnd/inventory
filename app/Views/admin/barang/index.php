<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Kelola Barang<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success text-center" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Data Barang</h1>
        <a href="<?= base_url('admin/barang/create') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-500"></i> Tambah</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php foreach ($barang as $b) : ?>
                            <tr>
                                <td><?= $b['id_barang']; ?></td>
                                <td><?= $b['kode_barang']; ?></td>
                                <td><?= $b['nama_barang']; ?></td>
                                <td><?= $b['kategori']; ?></td>
                                <td><?= $b['stok']; ?></td>
                                <td><?= $b['satuan']; ?></td>
                                <td><?= number_format($b['harga_satuan'], 2, ',', '.'); ?></td>
                                <td>
                                    <a href="/admin/barang/edit/<?= $b['id_barang']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/admin/barang/delete/<?= $b['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus barang ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>