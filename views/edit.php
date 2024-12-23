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

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $peserta = $controller->getPesertaById($id); // Ambil data peserta berdasarkan ID
    if (!$peserta) {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $kategori = $_POST['kategori'];

    if ($controller->updatePeserta($id, $nama, $umur, $kategori)) {
        header('Location: index.php?message=Data berhasil diperbarui');
        exit;
    } else {
        echo "Gagal memperbarui data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peserta</title>
    <link rel="stylesheet" href="../assets/style.css">
    <script>
        function confirmSubmit() {
            var result = confirm("Apakah sudah yakin untuk menyimpan perubahan?");
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
            <h1>Edit Peserta</h1>
            <form method="POST" onsubmit="return confirmSubmit()">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" value="<?= $peserta['nama'] ?>" required><br>

                <label for="umur">Umur:</label>
                <input type="number" name="umur" id="umur" value="<?= $peserta['umur'] ?>" required><br>

                <label for="kategori">Kategori:</label>
                <input type="text" name="kategori" id="kategori" value="<?= $peserta['kategori'] ?>" required><br>

                <button type="submit">Simpan Perubahan</button>
            </form>
        </main>
    </div>
</body>
</html>
