<?php
include_once '../app/models/TamuModel.php';

class TamuController {
    private $model;

    public function __construct($db) {
        $this->model = new TamuModel($db);
    }

    public function index() {
        $result = $this->model->getAll();
        include '../app/views/tamu/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->nama_tamu = $_POST['nama_tamu'];
            $this->model->kontak_tamu = $_POST['kontak_tamu'];
            $this->model->alamat_tamu = $_POST['alamat_tamu'];
            if ($this->model->create()) {
                header("Location: /reservasi-hotel/public/tamu");
                exit;
            }
        }
        include '../app/views/tamu/tambah.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_tamu = $id;
            $this->model->nama_tamu = $_POST['nama_tamu'];
            $this->model->kontak_tamu = $_POST['kontak_tamu'];
            $this->model->alamat_tamu = $_POST['alamat_tamu'];
            if ($this->model->update()) {
                header("Location: /reservasi-hotel/public/tamu");
                exit;
            }
        }
        $tamu = $this->model->getById($id);
        include '../app/views/tamu/edit.php';
    }

    public function delete($id) {
        $this->model->id_tamu = $id;
        if ($this->model->delete()) {
            header("Location: /reservasi-hotel/public/tamu");
        }
    }
}
?>
