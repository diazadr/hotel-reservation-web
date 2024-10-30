<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Edit Reservasi</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>reservasi/edit/<?php echo $reservasi['id_reservasi']; ?>">
        <div class="input-field col s12">
            <select name="id_kamar" required>
                <?php foreach ($kamar_list as $kamar): ?>
                    <option value="<?php echo $kamar['id_kamar']; ?>" <?php echo ($kamar['id_kamar'] == $reservasi['id_kamar']) ? 'selected' : ''; ?>><?php echo $kamar['nomor_kamar']; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Kamar</label>
        </div>

        <div class="input-field col s12">
            <select name="id_tamu" required>
                <?php foreach ($tamu_list as $tamu): ?>
                    <option value="<?php echo $tamu['id_tamu']; ?>" <?php echo ($tamu['id_tamu'] == $reservasi['id_tamu']) ? 'selected' : ''; ?>><?php echo $tamu['nama_tamu']; ?></option>
                <?php endforeach; ?>
            </select>
            <label>Tamu</label>
        </div>

        <div class="input-field col s12">
            <input type="date" name="tanggal_checkin" value="<?php echo $reservasi['tanggal_checkin']; ?>" required>
            <label>Tanggal Check-in</label>
        </div>

        <div class="input-field col s12">
            <input type="date" name="tanggal_checkout" value="<?php echo $reservasi['tanggal_checkout']; ?>" required>
            <label>Tanggal Check-out</label>
        </div>

        <div class="input-field col s12">
            <select name="status_reservasi" required>
                <option value="Booked" <?php echo ($reservasi['status_reservasi'] == 'Booked') ? 'selected' : ''; ?>>Booked</option>
                <option value="Check-in" <?php echo ($reservasi['status_reservasi'] == 'Check-in') ? 'selected' : ''; ?>>Check-in</option>
                <option value="Check-out" <?php echo ($reservasi['status_reservasi'] == 'Check-out') ? 'selected' : ''; ?>>Check-out</option>
                <option value="Dibatalkan" <?php echo ($reservasi['status_reservasi'] == 'Dibatalkan') ? 'selected' : ''; ?>>Dibatalkan</option>
            </select>
            <label>Status Reservasi</label>
        </div>

        <button type="submit" class="btn waves-effect waves-light blue">Update</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>reservasi" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>