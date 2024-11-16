<?php include 'app/templates/header.php'; ?>

<h4 class="text-center my-4">Edit Pembayaran</h4>

<div class="container">
    <form method="POST" action="<?php echo BASE_URL; ?>pembayaran/edit/<?php echo $pembayaran['id_pembayaran']; ?>">
        <div class="mb-3">
            <label for="id_reservasi" class="form-label">Reservasi</label>
            <select id="id_reservasi" name="id_reservasi" class="form-select" required>
                <?php foreach ($reservasi_list as $reservasi): ?>
                    <option value="<?php echo $reservasi['id_reservasi']; ?>" <?php echo ($reservasi['id_reservasi'] == $pembayaran['id_reservasi']) ? 'selected' : ''; ?>>
                        <?php echo $reservasi['id_reservasi']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran</label>
            <input type="date" id="tanggal_pembayaran" name="tanggal_pembayaran" class="form-control" value="<?php echo $pembayaran['tanggal_pembayaran']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <select id="metode_pembayaran" name="metode_pembayaran" class="form-select" required>
                <option value="Transfer" <?php echo ($pembayaran['metode_pembayaran'] == 'Transfer') ? 'selected' : ''; ?>>Transfer</option>
                <option value="Kartu Kredit" <?php echo ($pembayaran['metode_pembayaran'] == 'Kartu Kredit') ? 'selected' : ''; ?>>Kartu Kredit</option>
                <option value="Tunai" <?php echo ($pembayaran['metode_pembayaran'] == 'Tunai') ? 'selected' : ''; ?>>Tunai</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah_pembayaran" class="form-label">Jumlah Pembayaran</label>
            <input type="number" id="jumlah_pembayaran" name="jumlah_pembayaran" class="form-control" value="<?php echo $pembayaran['jumlah_pembayaran']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo BASE_URL; ?>pembayaran" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include 'app/templates/footer.php'; ?>
