<?php

class KonserController {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_konser"; // Ganti dengan nama database Anda

    // Koneksi ke database
    private function getConnection() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }
        return $conn;
    }

    // Mendapatkan semua data peserta konser
    public function getPeserta() {
        $conn = $this->getConnection();
        $sql = "SELECT * FROM tblPesertaKonser"; // Sesuaikan dengan nama tabel Anda
        $result = $conn->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $conn->close();
        return $data;
    }

    // Mendapatkan data peserta berdasarkan ID
    public function getPesertaById($id) {
        $conn = $this->getConnection();
        $sql = "SELECT * FROM tblPesertaKonser WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        $stmt->close();
        $conn->close();
        return $data;
    }

    // Menambahkan peserta baru
    public function insertPeserta($nama, $umur, $kategori) {
        $conn = $this->getConnection();
        $sql = "INSERT INTO tblPesertaKonser (nama, umur, kategori) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sis", $nama, $umur, $kategori);
        $result = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $result;
    }

    // Memperbarui data peserta
    public function updatePeserta($id, $nama, $umur, $kategori) {
        $conn = $this->getConnection();
        $sql = "UPDATE tblPesertaKonser SET nama = ?, umur = ?, kategori = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sisi", $nama, $umur, $kategori, $id);
        $result = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $result;
    }

    // Menghapus data peserta
    public function deletePeserta($id) {
        $conn = $this->getConnection();
        $sql = "DELETE FROM tblPesertaKonser WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $result;
    }
}
