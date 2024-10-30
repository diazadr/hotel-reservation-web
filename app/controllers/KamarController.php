<?php
class KamarModel {
    private $conn;
    private $table = 'kamar';

    public $id_kamar;
    public $nomor_kamar;
    public $tipe_kamar;
    public $status_kamar;

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
        $query = "SELECT * FROM " . $this->table . " WHERE id_kamar = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create() {
        $query = "INSERT INTO " . $this->table . " (nomor_kamar, tipe_kamar, status_kamar) 
                  VALUES (:nomor_kamar, :tipe_kamar, :status_kamar)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nomor_kamar', $this->nomor_kamar);
        $stmt->bindParam(':tipe_kamar', $this->tipe_kamar);
        $stmt->bindParam(':status_kamar', $this->status_kamar);
        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET nomor_kamar = :nomor_kamar, tipe_kamar = :tipe_kamar, 
                      status_kamar = :status_kamar 
                  WHERE id_kamar = :id_kamar";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nomor_kamar', $this->nomor_kamar);
        $stmt->bindParam(':tipe_kamar', $this->tipe_kamar);
        $stmt->bindParam(':status_kamar', $this->status_kamar);
        $stmt->bindParam(':id_kamar', $this->id_kamar);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id_kamar = :id_kamar";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_kamar', $this->id_kamar);
        return $stmt->execute();
    }
}
?>
