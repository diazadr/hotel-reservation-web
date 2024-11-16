<?php include 'app/templates/header.php'; ?>

<div class="container">
    <h2 class="text-center mb-4">Selamat Datang di Sistem Manajemen Hotel</h2>
    <p class="text-center mb-4">Gunakan navigasi di bawah ini untuk mengakses fitur-fitur aplikasi:</p>

    <div class="row">
        <!-- Card for Manajemen Tamu -->
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
        
                <div class="card-body text-center">
                    <h5 class="card-title">Manajemen Tamu</h5>
                    <p class="card-text">Kelola data tamu hotel secara mudah.</p>
                    <a href="/reservasi-hotel/tamu" class="btn btn-primary">Akses</a>
                </div>
            </div>
        </div>

        <!-- Card for Manajemen Kamar -->
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">

                <div class="card-body text-center">
                    <h5 class="card-title">Manajemen Kamar</h5>
                    <p class="card-text">Atur informasi dan status kamar hotel.</p>
                    <a href="/reservasi-hotel/kamar" class="btn btn-primary">Akses</a>
                </div>
            </div>
        </div>

        <!-- Card for Manajemen Reservasi -->
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">

                <div class="card-body text-center">
                    <h5 class="card-title">Manajemen Reservasi</h5>
                    <p class="card-text">Kelola proses reservasi dengan cepat.</p>
                    <a href="/reservasi-hotel/reservasi" class="btn btn-primary">Akses</a>
                </div>
            </div>
        </div>

        <!-- Card for Manajemen Pembayaran -->
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">

                <div class="card-body text-center">
                    <h5 class="card-title">Manajemen Pembayaran</h5>
                    <p class="card-text">Kelola transaksi pembayaran dengan mudah.</p>
                    <a href="/reservasi-hotel/pembayaran" class="btn btn-primary">Akses</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'app/templates/footer.php'; ?>