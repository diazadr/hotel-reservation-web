<?php include 'app/templates/header.php'; ?>

<h4 class="text-center my-4">Tambah Pembayaran</h4>

<div class="container">
    <form method="POST" action="<?php echo BASE_URL; ?>pembayaran/tambah">
        <div class="mb-3">
            <label for="id_reservasi" class="form-label">ID Reservasi</label>
            <select id="id_reservasi" name="id_reservasi" class="form-select" required>
                <option value="" disabled selected>Pilih Reservasi</option>
                <?php foreach ($reservasi_list as $reservasi): ?>
                    <option value="<?php echo $reservasi['id_reservasi']; ?>"><?php echo $reservasi['id_reservasi']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran</label>
            <input type="date" id="tanggal_pembayaran" name="tanggal_pembayaran" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <select id="metode_pembayaran" name="metode_pembayaran" class="form-select" required>
                <option value="" disabled selected>Pilih Metode</option>
                <option value="Transfer">Transfer</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="Tunai">Tunai</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah_pembayaran" class="form-label">Jumlah Pembayaran</label>
            <input type="number" id="jumlah_pembayaran" name="jumlah_pembayaran" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo BASE_URL; ?>pembayaran" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include 'app/templates/footer.php'; ?>