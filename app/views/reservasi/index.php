<?php include 'app/templates/header.php'; ?>

<h3 class="text-center mt-3">Daftar Reservasi</h3>

<div class="mb-3">
    <a href="<?php echo BASE_URL; ?>reservasi/tambah" class="btn btn-primary">Tambah Reservasi</a>
    <a href="<?php echo BASE_URL; ?>" class="btn btn-success">Kembali</a>
</div>

    <table class="table table-hover text-center">
        <thead>
            <tr>
            <th>ID Reservasi</th>
                <th>Nomor Kamar</th>
                <th>Nama Tamu</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                <td><?php echo $row['id_reservasi']; ?></td>
                    <td><?php echo $row['nomor_kamar']; ?></td>
                    <td><?php echo $row['nama_tamu']; ?></td>
                    <td><?php echo $row['tanggal_checkin']; ?></td>
                    <td><?php echo $row['tanggal_checkout']; ?></td>
                    <td><?php echo $row['status_reservasi']; ?></td>
                    <td>
                        <a href="<?php echo BASE_URL; ?>reservasi/edit/<?php echo $row['id_reservasi']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?php echo BASE_URL; ?>reservasi/hapus/<?php echo $row['id_reservasi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include 'app/templates/footer.php'; ?>
