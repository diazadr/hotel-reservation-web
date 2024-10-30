<?php
class ReservasiModel {
    private $conn;
    private $table = 'reservasi';

    public $id_reservasi;
    public $id_kamar;
    public $id_tamu;
    public $tanggal_checkin;
    public $tanggal_checkout;
    public $status_reservasi;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT r.*, k.nomor_kamar, t.nama_tamu 
                  FROM " . $this->table . " r
                  JOIN kamar k ON r.id_kamar = k.id_kamar
                  JOIN tamu t ON r.id_tamu = t.id_tamu";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_reservasi = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " 
                  (id_kamar, id_tamu, tanggal_checkin, tanggal_checkout, status_reservasi) 
                  VALUES (:id_kamar, :id_tamu, :tanggal_checkin, :tanggal_checkout, :status_reservasi)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_kamar', $this->id_kamar);
        $stmt->bindParam(':id_tamu', $this->id_tamu);
        $stmt->bindParam(':tanggal_checkin', $this->tanggal_checkin);
        $stmt->bindParam(':tanggal_checkout', $this->tanggal_checkout);
        $stmt->bindParam(':status_reservasi', $this->status_reservasi);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET id_kamar = :id_kamar, id_tamu = :id_tamu, 
                      tanggal_checkin = :tanggal_checkin, tanggal_checkout = :tanggal_checkout, 
                      status_reservasi = :status_reservasi 
                  WHERE id_reservasi = :id_reservasi";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_kamar', $this->id_kamar);
        $stmt->bindParam(':id_tamu', $this->id_tamu);
        $stmt->bindParam(':tanggal_checkin', $this->tanggal_checkin);
        $stmt->bindParam(':tanggal_checkout', $this->tanggal_checkout);
        $stmt->bindParam(':status_reservasi', $this->status_reservasi);
        $stmt->bindParam(':id_reservasi', $this->id_reservasi);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id_reservasi = :id_reservasi";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_reservasi', $this->id_reservasi);
        return $stmt->execute();
    }
}
?>
