<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Edit Pembayaran</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>pembayaran/edit/<?php echo $pembayaran['id_pembayaran']; ?>">
        <div class="input-field col s12">
            <select name="id_reservasi" required>
                <?php foreach ($reservasi_list as $reservasi): ?>
                    <option value="<?php echo $reservasi['id_reservasi']; ?>" <?php echo ($reservasi['id_reservasi'] == $pembayaran['id_reservasi']) ? 'selected' : ''; ?>><?php echo $reservasi['id_reservasi']; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Reservasi</label>
        </div>

        <div class="input-field col s12">
            <input type="date" name="tanggal_pembayaran" value="<?php echo $pembayaran['tanggal_pembayaran']; ?>" required>
            <label for="tanggal_pembayaran">Tanggal Pembayaran</label>
        </div>

        <div class="input-field col s12">
            <select name="metode_pembayaran" required>
                <option value="Transfer" <?php echo ($pembayaran['metode_pembayaran'] == 'Transfer') ? 'selected' : ''; ?>>Transfer</option>
                <option value="Kartu Kredit" <?php echo ($pembayaran['metode_pembayaran'] == 'Kartu Kredit') ? 'selected' : ''; ?>>Kartu Kredit</option>
                <option value="Tunai" <?php echo ($pembayaran['metode_pembayaran'] == 'Tunai') ? 'selected' : ''; ?>>Tunai</option>
            </select>
            <label>Metode Pembayaran</label>
        </div>

        <div class="input-field col s12">
            <input type="number" name="jumlah_pembayaran" value="<?php echo $pembayaran['jumlah_pembayaran']; ?>" required>
            <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
        </div>

        <button type="submit" class="btn waves-effect waves-light blue">Update</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>pembayaran" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>