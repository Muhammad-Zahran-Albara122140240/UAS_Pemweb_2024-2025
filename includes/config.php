<?php
// Konfigurasi database
$host = 'junction.proxy.rlwy.net';
$dbname = 'railway';
$username = 'root';
$port = 39408;
$password = 'EAGbFNnFbuPwkOLsDPuLLaedtSaqxdFA';
try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
