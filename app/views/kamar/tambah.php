<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Tambah Kamar</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>kamar/tambah">
        <div class="row">
            <div class="input-field col s12">
                <input id="nomor_kamar" type="text" name="nomor_kamar" required>
                <label for="nomor_kamar">Nomor Kamar</label>
            </div>
            <div class="input-field col s12">
                <input id="tipe_kamar" type="text" name="tipe_kamar" required>
                <label for="tipe_kamar">Tipe Kamar</label>
            </div>
            <div class="input-field col s12">
                <input id="status_kamar" type="text" name="status_kamar" required>
                <label for="status_kamar">Status Kamar</label>
            </div>
        </div>
        <button type="submit" class="btn waves-effect waves-light blue">Simpan</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>kamar" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
