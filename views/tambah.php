<?php
require_once '../controllers/KonserController.php';
session_start();
if (!isset($_SESSION['username'])) {
    // Redirect ke halaman login jika belum login
    header("Location: login.php");
    exit;
}
$username = $_SESSION['username'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $kategori = $_POST['kategori'];

    $controller = new KonserController();
    $controller->insertPeserta($nama, $umur, $kategori);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peserta</title>
    <link rel="stylesheet" href="../assets/style.css">
    <script>
        function confirmSubmit() {
            var result = confirm("Apakah Anda yakin ingin menambah peserta?");
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
            <h1>Tambah Peserta</h1>
            <form method="POST" onsubmit="return confirmSubmit()">
                <div>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" id="nama" required>
                </div>

                <div>
                    <label for="umur">Umur:</label>
                    <input type="number" name="umur" id="umur" required>
                </div>

                <div>
                    <label for="kategori">Kategori:</label>
                    <select name="kategori" id="kategori" required>
                        <option value="" disabled selected>Pilih Kategori</option>
                        <option value="VIP">VIP</option>
                        <option value="CAT 1">CAT 1</option>
                        <option value="CAT 2">CAT 2</option>
                        <option value="CAT 3A">CAT 3A</option>
                        <option value="CAT 3B">CAT 3B</option>
                        <option value="CAT 4">CAT 4</option>
                        <option value="CAT 5A">CAT 5A</option>
                        <option value="CAT 5B">CAT 5B</option>
                    </select>
                </div>

                <button type="submit">Tambah</button>
            </form>
        </main>
    </div>
</body>
</html>
