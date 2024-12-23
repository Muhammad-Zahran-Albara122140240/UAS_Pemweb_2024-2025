<?php
class Koneksi {
    private $host = 'junction.proxy.rlwy.net';
    private $port = 39408;
    private $user = 'root';
    private $password = 'EAGbFNnFbuPwkOLsDPuLLaedtSaqxdFA';
    private $dbname = 'railway';
    private $conn;

    public function __construct() {
        $this->conn = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->dbname,
            $this->port
        );

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function getBrowserInfo() {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public function getIpAddress() {
        return $_SERVER['REMOTE_ADDR'];
    }
}
?>
