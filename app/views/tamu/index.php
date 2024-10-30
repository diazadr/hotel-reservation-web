<?php include '../app/templates/header.php'; ?>

<h3 class="center-align">Daftar Tamu</h3>
<div class="row">
    <a href="<?php echo BASE_URL; ?>tamu/tambah" class="btn waves-effect waves-light blue">Tambah Tamu</a>
</div>

<table class="highlight centered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Tamu</th>
            <th>Kontak</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $row['id_tamu']; ?></td>
                <td><?php echo $row['nama_tamu']; ?></td>
                <td><?php echo $row['kontak_tamu']; ?></td>
                <td><?php echo $row['alamat_tamu']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>tamu/edit/<?php echo $row['id_tamu']; ?>" class="btn-small orange">Edit</a>
                    <a href="<?php echo BASE_URL; ?>tamu/hapus/<?php echo $row['id_tamu']; ?>" class="btn-small red" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../app/templates/footer.php'; ?>
