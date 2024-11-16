<?php include 'app/templates/header.php'; ?>

<h4 class="text-center mt-3">Tambah Reservasi</h4>

<div class="container">
    <form method="POST" action="<?php echo BASE_URL; ?>reservasi/tambah">
         <div class="mb-3">
            <label for="id_kamar">Kamar</label>
            <select class="form-control" id="id_kamar" name="id_kamar" required>
                <option value="" disabled selected>Pilih Kamar</option>
                <?php foreach ($kamar_list as $kamar): ?>
                    <option value="<?php echo $kamar['id_kamar']; ?>"><?php echo $kamar['nomor_kamar']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

         <div class="mb-3">
            <label for="id_tamu">Tamu</label>
            <select class="form-control" id="id_tamu" name="id_tamu" required>
                <option value="" disabled selected>Pilih Tamu</option>
                <?php foreach ($tamu_list as $tamu): ?>
                    <option value="<?php echo $tamu['id_tamu']; ?>"><?php echo $tamu['nama_tamu']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

         <div class="mb-3">
            <label for="tanggal_checkin">Tanggal Check-in</label>
            <input type="date" class="form-control" id="tanggal_checkin" name="tanggal_checkin" required>
        </div>

         <div class="mb-3">
            <label for="tanggal_checkout">Tanggal Check-out</label>
            <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout" required>
        </div>

         <div class="mb-3">
            <label for="status_reservasi">Status Reservasi</label>
            <select class="form-control" id="status_reservasi" name="status_reservasi" required>
                <option value="" disabled selected>Pilih Status</option>
                <option value="Booked">Booked</option>
                <option value="Check-in">Check-in</option>
                <option value="Check-out">Check-out</option>
                <option value="Dibatalkan">Dibatalkan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo BASE_URL; ?>reservasi" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include 'app/templates/footer.php'; ?>
