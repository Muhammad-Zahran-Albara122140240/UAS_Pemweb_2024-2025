<?php
require_once '../controllers/KonserController.php';
$controller = new KonserController();
$dataPeserta = $controller->getPeserta(); 
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
    <title>Data Peserta Konser Justin Bieber</title>
    <link rel="stylesheet" href="../assets/style.css">
    <script>
        function confirmDelete() {
            var result = confirm("Apakah Anda yakin ingin menghapus peserta ini?");
            return result; 
        }
    </script>
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
            <h1>Data Peserta Konser Justin Bieber 2025</h1>
            <a href="tambah.php" class="btn">Tambah Peserta</a>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($dataPeserta as $index => $peserta): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $peserta['nama'] ?></td>
                    <td><?= $peserta['umur'] ?></td>
                    <td><?= $peserta['kategori'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $peserta['id'] ?>" class="btn-edit">Edit</a>
                        <a href="delete.php?id=<?= $peserta['id'] ?>" class="btn-delete" onclick="return confirmDelete()">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </main>
    </div>
</body>
</html>
