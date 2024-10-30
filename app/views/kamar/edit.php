<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Edit Kamar</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>kamar/edit/<?php echo $kamar['id_kamar']; ?>">
        <div class="row">
            <div class="input-field col s12">
                <input id="nomor_kamar" type="text" name="nomor_kamar" value="<?php echo $kamar['nomor_kamar']; ?>" required>
                <label for="nomor_kamar" class="active">Nomor Kamar</label>
            </div>
            <div class="input-field col s12">
                <input id="tipe_kamar" type="text" name="tipe_kamar" value="<?php echo $kamar['tipe_kamar']; ?>" required>
                <label for="tipe_kamar" class="active">Tipe Kamar</label>
            </div>
            <div class="input-field col s12">
                <input id="status_kamar" type="text" name="status_kamar" value="<?php echo $kamar['status_kamar']; ?>" required>
                <label for="status_kamar" class="active">Status Kamar</label>
            </div>
        </div>
        <button type="submit" class="btn waves-effect waves-light blue">Update</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>kamar" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
