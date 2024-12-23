<?php
include '../includes/config.php';
include '../includes/functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($pdo, $username, $password)) {
        // Simpan username ke session
        $_SESSION['username'] = $username;
        header("Location: ../views/index.php");
        exit;
    } else {
        echo "Login gagal! Periksa username atau password Anda.";
    }
}
?>
