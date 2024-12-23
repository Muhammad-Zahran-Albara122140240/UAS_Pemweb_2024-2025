<?php
require_once '../controllers/KonserController.php';
$controller = new KonserController();
session_start();
if (!isset($_SESSION['username'])) {
    // Redirect ke halaman login jika belum login
    header("Location: login.php");
    exit;
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Konser Justin Bieber</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="profile">
                <img src="../assets/anonim.jpg" alt="Foto Profil">
                <p><?= htmlspecialchars($username) ?></p>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Daftar Peserta</a></li>
                    <li><a href="info.php">Info</a></li>
                    <li><a href="cookie-demo.php">Cookies</a></li>
                    <li><a href="../actions/logout.php">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <main class="content">
            <h1>Layout Konser Justin Bieber 2025</h1>
            <img src="../assets/seat.jpg" alt="Konser Justin Bieber" style="max-width: 100%; height: auto;">
        </main>
    </div>
</body>
</html>
