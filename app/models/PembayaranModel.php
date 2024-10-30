<?php
class PembayaranModel {
    private $conn;
    private $table = 'pembayaran';

    public $id_pembayaran;
    public $id_reservasi;
    public $tanggal_pembayaran;
    public $metode_pembayaran;
    public $jumlah_pembayaran;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT p.*, r.tanggal_checkin, r.tanggal_checkout 
                  FROM " . $this->table . " p
                  JOIN reservasi r ON p.id_reservasi = r.id_reservasi";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_pembayaran = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " 
                  (id_reservasi, tanggal_pembayaran, metode_pembayaran, jumlah_pembayaran) 
                  VALUES (:id_reservasi, :tanggal_pembayaran, :metode_pembayaran, :jumlah_pembayaran)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_reservasi', $this->id_reservasi);
        $stmt->bindParam(':tanggal_pembayaran', $this->tanggal_pembayaran);
        $stmt->bindParam(':metode_pembayaran', $this->metode_pembayaran);
        $stmt->bindParam(':jumlah_pembayaran', $this->jumlah_pembayaran);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET id_reservasi = :id_reservasi, 
                      tanggal_pembayaran = :tanggal_pembayaran, 
                      metode_pembayaran = :metode_pembayaran, 
                      jumlah_pembayaran = :jumlah_pembayaran 
                  WHERE id_pembayaran = :id_pembayaran";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_reservasi', $this->id_reservasi);
        $stmt->bindParam(':tanggal_pembayaran', $this->tanggal_pembayaran);
        $stmt->bindParam(':metode_pembayaran', $this->metode_pembayaran);
        $stmt->bindParam(':jumlah_pembayaran', $this->jumlah_pembayaran);
        $stmt->bindParam(':id_pembayaran', $this->id_pembayaran);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id_pembayaran = :id_pembayaran";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pembayaran', $this->id_pembayaran);
        return $stmt->execute();
    }
}
?>
