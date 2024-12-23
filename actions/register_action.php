<?php
include '../includes/config.php';
include '../includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        register($pdo, $username, $email, $password);
        header("Location: ../views/login.php");
        exit;
    } catch (PDOException $e) {
        echo "Register gagal: " . $e->getMessage();
    }
}
?>
