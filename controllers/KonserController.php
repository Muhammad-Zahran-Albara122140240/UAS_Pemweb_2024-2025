<?php
require_once '../config/koneksi.php';

class KonserController extends Koneksi {
    public function getPeserta() {
        $conn = $this->getConnection();
        $sql = "SELECT * FROM tblPesertaKonser";
        $result = $conn->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function getPesertaById($id) {
        $conn = $this->getConnection();
        $sql = "SELECT * FROM tblPesertaKonser WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $stmt->close();
        return $data;
    }

    public function insertPeserta($nama, $umur, $kategori) {
        $conn = $this->getConnection();
        $sql = "INSERT INTO tblPesertaKonser (nama, umur, kategori) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sis", $nama, $umur, $kategori);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function updatePeserta($id, $nama, $umur, $kategori) {
        $conn = $this->getConnection();
        $sql = "UPDATE tblPesertaKonser SET nama = ?, umur = ?, kategori = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisi", $nama, $umur, $kategori, $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }

    public function deletePeserta($id) {
        $conn = $this->getConnection();
        $sql = "DELETE FROM tblPesertaKonser WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}
