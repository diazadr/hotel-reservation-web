<?php include '../app/templates/header.php'; ?>

<h3 class="center-align">Daftar Pembayaran</h3>
<div class="row">

    <a href="<?php echo BASE_URL; ?>pembayaran/tambah" class="btn waves-effect waves-light blue">Tambah Pembayaran</a>
</div>

<table class="highlight centered">
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
                    <a href="<?php echo BASE_URL; ?>pembayaran/edit/<?php echo $row['id_pembayaran']; ?>" class="btn-small orange">Edit</a>
                    <a href="<?php echo BASE_URL; ?>pembayaran/hapus/<?php echo $row['id_pembayaran']; ?>" class="btn-small red" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../app/templates/footer.php'; ?>
