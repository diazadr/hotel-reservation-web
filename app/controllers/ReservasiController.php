<?php
include_once '../app/models/ReservasiModel.php';
include_once '../app/models/KamarModel.php';
include_once '../app/models/TamuModel.php';

class ReservasiController {
    private $model;
    private $kamarModel;
    private $tamuModel;

    public function __construct($db) {
        $this->model = new ReservasiModel($db);
        $this->kamarModel = new KamarModel($db);
        $this->tamuModel = new TamuModel($db);
    }

    public function index() {
        $result = $this->model->getAll();
        include '../app/views/reservasi/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_kamar = $_POST['id_kamar'];
            $this->model->id_tamu = $_POST['id_tamu'];
            $this->model->tanggal_checkin = $_POST['tanggal_checkin'];
            $this->model->tanggal_checkout = $_POST['tanggal_checkout'];
            $this->model->status_reservasi = $_POST['status_reservasi'];

            if ($this->model->create()) {
                $_SESSION['flash_message'] = "Reservasi berhasil ditambahkan.";
                header("Location: /hotel_management/public/reservasi");
                exit;
            }
        }

        $kamar_list = $this->kamarModel->getAll();
        $tamu_list = $this->tamuModel->getAll();

        include '../app/views/reservasi/tambah.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->id_reservasi = $id;
            $this->model->id_kamar = $_POST['id_kamar'];
            $this->model->id_tamu = $_POST['id_tamu'];
            $this->model->tanggal_checkin = $_POST['tanggal_checkin'];
            $this->model->tanggal_checkout = $_POST['tanggal_checkout'];
            $this->model->status_reservasi = $_POST['status_reservasi'];

            if ($this->model->update()) {
                header("Location: /hotel_management/public/reservasi");
                exit;
            }
        }

        $reservasi = $this->model->getById($id);
        $kamar_list = $this->kamarModel->getAll();
        $tamu_list = $this->tamuModel->getAll();

        include '../app/views/reservasi/edit.php';
    }

    public function delete($id) {
        $this->model->id_reservasi = $id;
        if ($this->model->delete()) {
            header("Location: /hotel_management/public/reservasi");
        }
    }
}
?>
