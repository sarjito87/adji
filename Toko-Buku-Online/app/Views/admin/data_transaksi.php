<!-- app/Views/admin/data_transaksi.php -->
<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <h1>Data Transaksi</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Transaksi</th>
                <th>Buku</th>
                <th>Nama Pelanggan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksi as $item): ?>
            <tr>
                <td><?= $item['id_transaksi']; ?></td>
                <td><?= date('d-m-Y', strtotime($item['tanggal_transaksi'])); ?></td>
                <td><?= $item['buku']; ?></td>
                <td><?= $item['nama_pelanggan']; ?></td>
                <td><?= $item['status']; ?></td>
                <td>
                    <a href="<?= site_url('admin/transaksi/edit/' . $item['id_transaksi']); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= site_url('admin/transaksi/delete/' . $item['id_transaksi']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>