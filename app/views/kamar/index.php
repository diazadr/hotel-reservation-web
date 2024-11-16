<?php include 'app/templates/header.php'; ?>

<h3 class="text-center my-4">Daftar Kamar</h3>

<div class="mb-3">
    <a href="<?php echo BASE_URL; ?>kamar/tambah" class="btn btn-primary">Tambah Kamar</a>
    <a href="<?php echo BASE_URL; ?>" class="btn btn-success">Kembali</a>
</div>

<table class="table table-hover text-center">
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
                    <a href="<?php echo BASE_URL; ?>kamar/edit/<?php echo $row['id_kamar']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?php echo BASE_URL; ?>kamar/hapus/<?php echo $row['id_kamar']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include 'app/templates/footer.php'; ?>
