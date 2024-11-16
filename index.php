<?php
include_once 'config/Database.php';
include_once 'app/controllers/HomeController.php';
include_once 'app/controllers/TamuController.php';
include_once 'app/controllers/KamarController.php';
include_once 'app/controllers/ReservasiController.php';
include_once 'app/controllers/PembayaranController.php';

$database = new Database();
$db = $database->getConnection();

// Ambil URL path
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Home
if ($url === '/reservasi-hotel' || $url === '/reservasi-hotel/') {
    $controller = new HomeController();
    $controller->index();
}

// CRUD tamu
elseif ($url === '/reservasi-hotel/tamu') {
    $controller = new TamuController($db);
    $controller->index();
} elseif ($url === '/reservasi-hotel/tamu/tambah') {
    $controller = new TamuController($db);
    $controller->create();
} elseif (preg_match('/\/reservasi-hotel\/tamu\/edit\/(\d+)/', $url, $matches)) {
    $controller = new TamuController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/reservasi-hotel\/tamu\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new TamuController($db);
    $controller->delete($matches[1]);
}

// CRUD Kamar
elseif ($url === '/reservasi-hotel/kamar') {
    $controller = new KamarController($db);
    $controller->index();
} elseif ($url === '/reservasi-hotel/kamar/tambah') {
    $controller = new KamarController($db);
    $controller->create();
} elseif (preg_match('/\/reservasi-hotel\/kamar\/edit\/(\d+)/', $url, $matches)) {
    $controller = new KamarController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/reservasi-hotel\/kamar\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new KamarController($db);
    $controller->delete($matches[1]);
}

// CRUD Reservasi
elseif ($url === '/reservasi-hotel/reservasi') {
    $controller = new ReservasiController($db);
    $controller->index();
} elseif ($url === '/reservasi-hotel/reservasi/tambah') {
    $controller = new ReservasiController($db);
    $controller->create();
} elseif (preg_match('/\/reservasi-hotel\/reservasi\/edit\/(\d+)/', $url, $matches)) {
    $controller = new ReservasiController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/reservasi-hotel\/reservasi\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new ReservasiController($db);
    $controller->delete($matches[1]);
}

// CRUD pembayaran
elseif ($url === '/reservasi-hotel/pembayaran') {
    $controller = new PembayaranController($db);
    $controller->index();
} elseif ($url === '/reservasi-hotel/pembayaran/tambah') {
    $controller = new PembayaranController($db);
    $controller->create();
} elseif (preg_match('/\/reservasi-hotel\/pembayaran\/edit\/(\d+)/', $url, $matches)) {
    $controller = new PembayaranController($db);
    $controller->edit($matches[1]);
} elseif (preg_match('/\/reservasi-hotel\/pembayaran\/hapus\/(\d+)/', $url, $matches)) {
    $controller = new PembayaranController($db);
    $controller->delete($matches[1]);
}

// Jika URL tidak ditemukan
else {
    echo "404 - Page Not Found";
}
