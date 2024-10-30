<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Tambah Pembayaran</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>pembayaran/tambah">
        <div class="input-field col s12">
            <select name="id_reservasi" required>
                <option value="" disabled selected>Pilih Reservasi</option>
                <?php foreach ($reservasi_list as $reservasi): ?>
                    <option value="<?php echo $reservasi['id_reservasi']; ?>"><?php echo $reservasi['id_reservasi']; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Reservasi</label>
        </div>

        <div class="input-field col s12">
            <input type="date" name="tanggal_pembayaran" required>
            <label for="tanggal_pembayaran">Tanggal Pembayaran</label>
        </div>

        <div class="input-field col s12">
            <select name="metode_pembayaran" required>
                <option value="" disabled selected>Pilih Metode</option>
                <option value="Transfer">Transfer</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="Tunai">Tunai</option>
            </select>
            <label>Metode Pembayaran</label>
        </div>

        <div class="input-field col s12">
            <input type="number" name="jumlah_pembayaran" required>
            <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
        </div>

        <button type="submit" class="btn waves-effect waves-light blue">Simpan</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>pembayaran" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
