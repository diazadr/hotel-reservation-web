<?php
include_once '../app/models/PembayaranModel.php';
include_once '../app/models/ReservasiModel.php';

class PembayaranController {
    private $model;
    private $reservasiModel;
    

    public function __construct($db) {
        $this->model = new PembayaranModel($db);
        $this->reservasiModel = new ReservasiModel($db);
    }

    public function index() {
        $result = $this->model->getAll();
        include '../app/views/pembayaran/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_reservasi = $_POST['id_reservasi'];
            $this->model->metode_pembayaran = $_POST['metode_pembayaran'];
            $this->model->tanggal_pembayaran = $_POST['tanggal_pembayaran'];
            $this->model->jumlah_pembayaran = $_POST['jumlah_pembayaran'];
            if ($this->model->create()) {
                header("Location: /reservasi-hotel/public/pembayaran");
                exit;
            }
        }

        
        $reservasi_list = $this->reservasiModel->getAll();

        include '../app/views/pembayaran/tambah.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_pembayaran = $id;
            $this->model->id_reservasi = $_POST['id_reservasi'];
            $this->model->metode_pembayaran = $_POST['metode_pembayaran'];
            $this->model->tanggal_pembayaran = $_POST['tanggal_pembayaran'];
            $this->model->jumlah_pembayaran = $_POST['jumlah_pembayaran'];
            if ($this->model->update()) {
                header("Location: /reservasi-hotel/public/pembayaran");
                exit;
            }
        }
        $pembayaran = $this->model->getById($id);
        $reservasi_list = $this->reservasiModel->getAll();
        include '../app/views/pembayaran/edit.php';
    }

    public function delete($id) {
        $this->model->id_pembayaran = $id;
        if ($this->model->delete()) {
            header("Location: /reservasi-hotel/public/pembayaran");
        }
    }
}
?>
