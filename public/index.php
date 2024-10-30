<?php
include_once '../config/Database.php';
include_once '../app/controllers/HomeController.php';
include_once '../app/controllers/TamuController.php';
include_once '../app/controllers/KamarController.php';
include_once '../app/controllers/ReservasiController.php';
include_once '../app/controllers/PembayaranController.php';

$database = new Database();
$db = $database->getConnection();

// Ambil URL path
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Home
if ($url === '/reservasi-hotel/public/' || $url === '/reservasi-hotel/public') {
    $controller = new HomeController();
    $controller->index();
}

// CRUD tamu
elseif ($url === '/reservasi-hotel/public/tamu') {
    $controller = new TamuController($db);
    $controller->index();
} elseif ($url === '/reservasi-hotel/public/tamu/tambah') {
    $controller = new TamuController($db);
    $controller->create();
} elseif (preg_match('/\/reservasi-hotel\/public\/tamu\/edit\/(\d+)/', $url, $matches)) {
    $controller = new TamuController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/reservasi-hotel\/public\/tamu\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new TamuController($db);
    $controller->delete($matches[1]);
}

// CRUD Kamar
elseif ($url === '/reservasi-hotel/public/kamar') {
    $controller = new KamarController($db);
    $controller->index();
} elseif ($url === '/reservasi-hotel/public/kamar/tambah') {
    $controller = new KamarController($db);
    $controller->create();
} elseif (preg_match('/\/reservasi-hotel\/public\/kamar\/edit\/(\d+)/', $url, $matches)) {
    $controller = new KamarController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/reservasi-hotel\/public\/kamar\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new KamarController($db);
    $controller->delete($matches[1]);
}

// CRUD Reservasi
elseif ($url === '/reservasi-hotel/public/reservasi') {
    $controller = new ReservasiController($db);
    $controller->index();
} elseif ($url === '/reservasi-hotel/public/reservasi/tambah') {
    $controller = new ReservasiController($db);
    $controller->create();
} elseif (preg_match('/\/reservasi-hotel\/public\/reservasi\/edit\/(\d+)/', $url, $matches)) {
    $controller = new ReservasiController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/reservasi-hotel\/public\/reservasi\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new ReservasiController($db);
    $controller->delete($matches[1]);
}

// CRUD pembayaran
elseif ($url === '/reservasi-hotel/public/pembayaran') {
    $controller = new PembayaranController($db);
    $controller->index();
} elseif ($url === '/reservasi-hotel/public/pembayaran/tambah') {
    $controller = new PembayaranController($db);
    $controller->create();
} elseif (preg_match('/\/reservasi-hotel\/public\/pembayaran\/edit\/(\d+)/', $url, $matches)) {
    $controller = new PembayaranController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/reservasi-hotel\/public\/pembayaran\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new PembayaranController($db);
    $controller->delete($matches[1]);
}

// Jika URL tidak ditemukan
else {
    echo "404 - Page Not Found";
}
?>
