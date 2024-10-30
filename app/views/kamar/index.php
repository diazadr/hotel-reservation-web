<?php include '../app/templates/header.php'; ?>

<h3 class="center-align">Daftar Kamar</h3>
<div class="row">
    <a href="<?php echo BASE_URL; ?>kamar/tambah" class="btn waves-effect waves-light blue">Tambah Kamar</a>
</div>

<table class="highlight centered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nomor Kamar</th>
            <th>Tipe Kamar</th>
            <th>Status Kamar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id_kamar']; ?></td>
                <td><?php echo $row['nomor_kamar']; ?></td>
                <td><?php echo $row['tipe_kamar']; ?></td>
                <td><?php echo $row['status_kamar']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>kamar/edit/<?php echo $row['id_kamar']; ?>" class="btn-small orange">Edit</a>
                    <a href="<?php echo BASE_URL; ?>kamar/hapus/<?php echo $row['id_kamar']; ?>" class="btn-small red" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../app/templates/footer.php'; ?>
