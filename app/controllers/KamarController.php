<?php
include_once '../app/models/KamarModel.php';

class KamarController {
    private $model;

    public function __construct($db) {
        $this->model = new KamarModel($db);
    }

    public function index() {
        $result = $this->model->getAll();
        include '../app/views/kamar/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->nomor_kamar = $_POST['nomor_kamar'];
            $this->model->tipe_kamar = $_POST['tipe_kamar'];
            $this->model->status_kamar = $_POST['status_kamar'];
            if ($this->model->create()) {
                header("Location: /reservasi-hotel/public/kamar");
                exit;
            }
        }
        include '../app/views/kamar/tambah.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_kamar = $id;
            $this->model->nomor_kamar = $_POST['nomor_kamar'];
            $this->model->tipe_kamar = $_POST['tipe_kamar'];
            $this->model->status_kamar = $_POST['status_kamar'];
            if ($this->model->update()) {
                header("Location: /reservasi-hotel/public/kamar");
                exit;
            }
        }
        $kamar = $this->model->getById($id);
        include '../app/views/kamar/edit.php';
    }

    public function delete($id) {
        $this->model->id_kamar = $id;
        if ($this->model->delete()) {
            header("Location: /reservasi-hotel/public/kamar");
            exit;
        }
    }
}
?>
