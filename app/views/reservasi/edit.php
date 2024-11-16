<?php include 'app/templates/header.php'; ?>

<h4 class="text-center mt-3">Edit Reservasi</h4>

<div class="container">
    <form method="POST" action="<?php echo BASE_URL; ?>reservasi/edit/<?php echo $reservasi['id_reservasi']; ?>">
        <div class="mb-3">
            <label for="id_kamar">Kamar</label>
            <select class="form-control" id="id_kamar" name="id_kamar" required>
                <?php foreach ($kamar_list as $kamar): ?>
                    <option value="<?php echo $kamar['id_kamar']; ?>" <?php echo ($kamar['id_kamar'] == $reservasi['id_kamar']) ? 'selected' : ''; ?>><?php echo $kamar['nomor_kamar']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="id_tamu">Tamu</label>
            <select class="form-control" id="id_tamu" name="id_tamu" required>
                <?php foreach ($tamu_list as $tamu): ?>
                    <option value="<?php echo $tamu['id_tamu']; ?>" <?php echo ($tamu['id_tamu'] == $reservasi['id_tamu']) ? 'selected' : ''; ?>><?php echo $tamu['nama_tamu']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_checkin">Tanggal Check-in</label>
            <input type="date" class="form-control" id="tanggal_checkin" name="tanggal_checkin" value="<?php echo $reservasi['tanggal_checkin']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_checkout">Tanggal Check-out</label>
            <input type="date" class="form-control" id="tanggal_checkout" name="tanggal_checkout" value="<?php echo $reservasi['tanggal_checkout']; ?>" required>
        </div>

        <div class="mb-3">
            <label for="status_reservasi">Status Reservasi</label>
            <select class="form-control" id="status_reservasi" name="status_reservasi" required>
                <option value="Booked" <?php echo ($reservasi['status_reservasi'] == 'Booked') ? 'selected' : ''; ?>>Booked</option>
                <option value="Check-in" <?php echo ($reservasi['status_reservasi'] == 'Check-in') ? 'selected' : ''; ?>>Check-in</option>
                <option value="Check-out" <?php echo ($reservasi['status_reservasi'] == 'Check-out') ? 'selected' : ''; ?>>Check-out</option>
                <option value="Dibatalkan" <?php echo ($reservasi['status_reservasi'] == 'Dibatalkan') ? 'selected' : ''; ?>>Dibatalkan</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo BASE_URL; ?>reservasi" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include 'app/templates/footer.php'; ?>
