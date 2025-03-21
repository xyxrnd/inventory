<?= $this->extend('layouts/base'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success text-center" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <!-- Page Heading -->
    <div class=" align-items-center justify-content-between mb-4">
        <form action="<?= base_url('admin/PenerimaanBarang/tambah') ?>" method="post">
            <div class="mb-3">
                <label for="id_barang" class="form-label">Barang</label>
                <select name="id_barang" id="id_barang" class="form-control" required>
                    <option value="">-- Pilih Barang --</option>
                    <?php foreach ($barang as $b): ?>
                        <option value="<?= $b['id_barang'] ?>"><?= $b['nama_barang'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_terima" class="form-label">Tanggal Terima</label>
                <input type="date" name="tanggal_terima" id="tanggal_terima" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="supplier" class="form-label">Supplier</label>
                <input type="text" name="supplier" id="supplier" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="harga_total" class="form-label">Harga Total</label>
                <input type="number" name="harga_total" id="harga_total" class="form-control" step="0.01" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penerimaan Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Supplier</th>
                            <th>Harga Total</th>
                            <th>Tanggal Terima</th>
                        </tr>

                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Supplier</th>
                            <th>Harga Total</th>
                            <th>Tanggal Terima</th>
                        </tr>

                    </tfoot>
                    <tbody>
                        <?php $no = 1;
                        foreach ($penerimaan as $p): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['nama_barang'] ?></td>
                                <td><?= $p['jumlah'] ?></td>
                                <td><?= $p['supplier'] ?></td>
                                <td>Rp <?= number_format($p['harga_total'], 2, ',', '.') ?></td>
                                <td><?= $p['tanggal_terima'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>