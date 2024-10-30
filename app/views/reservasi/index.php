<?php include '../app/templates/header.php'; ?>

<h3 class="center-align">Daftar Reservasi</h3>
<div class="row">
    <a href="<?php echo BASE_URL; ?>reservasi/tambah" class="btn waves-effect waves-light blue">Tambah Reservasi</a>
</div>

<table class="highlight centered">
    <thead>
        <tr>
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
                <td><?php echo $row['nomor_kamar']; ?></td>
                <td><?php echo $row['nama_tamu']; ?></td>
                <td><?php echo $row['tanggal_checkin']; ?></td>
                <td><?php echo $row['tanggal_checkout']; ?></td>
                <td><?php echo $row['status_reservasi']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>reservasi/edit/<?php echo $row['id_reservasi']; ?>" class="btn-small orange">Edit</a>
                    <a href="<?php echo BASE_URL; ?>reservasi/hapus/<?php echo $row['id_reservasi']; ?>" class="btn-small red" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../app/templates/footer.php'; ?>
