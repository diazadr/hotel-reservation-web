<?php include 'app/templates/header.php'; ?>

<h3 class="text-center my-4">Daftar Pembayaran</h3>

<div class="mb-3">
    <a href="<?php echo BASE_URL; ?>pembayaran/tambah" class="btn btn-primary">Tambah Pembayaran</a>
    <a href="<?php echo BASE_URL; ?>" class="btn btn-success">Kembali</a>
</div>

<div class="container">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th>ID Pembayaran</th>
                <th>ID Reservasi</th>
                <th>Tanggal Pembayaran</th>
                <th>Metode Pembayaran</th>
                <th>Jumlah Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $row['id_pembayaran']; ?></td>
                    <td><?php echo $row['id_reservasi']; ?></td>
                    <td><?php echo $row['tanggal_pembayaran']; ?></td>
                    <td><?php echo $row['metode_pembayaran']; ?></td>
                    <td><?php echo $row['jumlah_pembayaran']; ?></td>
                    <td>
                        <a href="<?php echo BASE_URL; ?>pembayaran/edit/<?php echo $row['id_pembayaran']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo BASE_URL; ?>pembayaran/hapus/<?php echo $row['id_pembayaran']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include 'app/templates/footer.php'; ?>
