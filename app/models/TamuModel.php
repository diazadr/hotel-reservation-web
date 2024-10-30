<?php
class TamuModel {
    private $conn;
    private $table = 'tamu';

    public $id_tamu;
    public $nama_tamu;
    public $kontak_tamu;
    public $alamat_tamu;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id_tamu = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " 
                  (nama_tamu, kontak_tamu, alamat_tamu) 
                  VALUES (:nama_tamu, :kontak_tamu, :alamat_tamu)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_tamu', $this->nama_tamu);
        $stmt->bindParam(':kontak_tamu', $this->kontak_tamu);
        $stmt->bindParam(':alamat_tamu', $this->alamat_tamu);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET nama_tamu = :nama_tamu, kontak_tamu = :kontak_tamu, alamat_tamu = :alamat_tamu 
                  WHERE id_tamu = :id_tamu";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_tamu', $this->nama_tamu);
        $stmt->bindParam(':kontak_tamu', $this->kontak_tamu);
        $stmt->bindParam(':alamat_tamu', $this->alamat_tamu);
        $stmt->bindParam(':id_tamu', $this->id_tamu);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id_tamu = :id_tamu";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_tamu', $this->id_tamu);
        return $stmt->execute();
    }
}
?>
