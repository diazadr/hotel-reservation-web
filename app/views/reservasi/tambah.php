<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Tambah Reservasi</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>reservasi/tambah">
        <div class="input-field col s12">
            <select name="id_kamar" required>
                <option value="" disabled selected>Pilih Kamar</option>
                <?php foreach ($kamar_list as $kamar): ?>
                    <option value="<?php echo $kamar['id_kamar']; ?>"><?php echo $kamar['nomor_kamar']; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Kamar</label>
        </div>

        <div class="input-field col s12">
            <select name="id_tamu" required>
                <option value="" disabled selected>Pilih Tamu</option>
                <?php foreach ($tamu_list as $tamu): ?>
                    <option value="<?php echo $tamu['id_tamu']; ?>"><?php echo $tamu['nama_tamu']; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Tamu</label>
        </div>

        <div class="input-field col s12">
            <input type="date" name="tanggal_checkin" required>
            <label for="tanggal_checkin">Tanggal Check-in</label>
        </div>

        <div class="input-field col s12">
            <input type="date" name="tanggal_checkout" required>
            <label for="tanggal_checkout">Tanggal Check-out</label>
        </div>

        <div class="input-field col s12">
            <select name="status_reservasi" required>
                <option value="" disabled selected>Pilih Status</option>
                <option value="Booked">Booked</option>
                <option value="Check-in">Check-in</option>
                <option value="Check-out">Check-out</option>
                <option value="Dibatalkan">Dibatalkan</option>
            </select>
            <label>Status Reservasi</label>
        </div>

        <button type="submit" class="btn waves-effect waves-light blue">Simpan</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>reservasi" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
