<?php
require_once '../controllers/KonserController.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $controller = new KonserController();
    if ($controller->deletePeserta($id)) {
        header('Location: index.php?message=Data berhasil dihapus');
        exit;
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
