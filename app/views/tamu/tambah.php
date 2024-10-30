<?php include '../app/templates/header.php'; ?>

<h4 class="center-align">Tambah Tamu</h4>

<div class="row">
    <form class="col s12" method="POST" action="<?php echo BASE_URL; ?>tamu/tambah">
        <div class="row">
            <div class="input-field col s12">
                <input id="nama_tamu" type="text" name="nama_tamu" required>
                <label for="nama_tamu">Nama Tamu</label>
            </div>
            <div class="input-field col s12">
                <input id="kontak_tamu" type="text" name="kontak_tamu" required>
                <label for="kontak_tamu">Kontak Tamu</label>
            </div>
            <div class="input-field col s12">
                <input id="alamat_tamu" type="text" name="alamat_tamu" required>
                <label for="alamat_tamu">Alamat Tamu</label>
            </div>
        </div>
        <button type="submit" class="btn waves-effect waves-light blue">Simpan</button>
    </form>
</div>

<a href="<?php echo BASE_URL; ?>tamu" class="btn waves-effect waves-light grey">Kembali</a>

<?php include '../app/templates/footer.php'; ?>
