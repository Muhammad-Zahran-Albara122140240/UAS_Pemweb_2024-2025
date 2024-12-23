<?php
session_start();

// Memeriksa apakah user sudah login
function isLoggedIn() {
    return isset($_SESSION['user']);
}

// Mendapatkan informasi user dari sesi
function getUser() {
    return isset($_SESSION['user']) ? $_SESSION['user'] : null;
}

// Untuk logout (menghapus sesi)
function logout() {
    session_unset();   // Menghapus semua data sesi
    session_destroy(); // Menghancurkan sesi
    header("Location: login.php"); // Mengarahkan ke halaman login setelah logout
    exit();
}
?>
