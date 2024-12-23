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
    <title>Cookie, LocalStorage & Session Manager</title>
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/js/cookie-manager.js"></script>
    <script src="../assets/js/localstorage-manager.js"></script>
    <script src="../assets/js/session-manager.js"></script>
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
            <h1>Cookie, Local Storage & Session Manager</h1>

            <!-- Cookie Management -->
            <section>
                <h2>Cookie Manager</h2>
                <label for="cookieValue">Set Cookie Value:</label>
                <input type="text" id="cookieValue" placeholder="Enter value">
                <button onclick="setCookie('username', document.getElementById('cookieValue').value, 7)">Set Cookie</button>
                <button onclick="alert(getCookie('username'))">Get Cookie</button>
                <button onclick="deleteCookie('username'); alert('Cookie deleted')">Delete Cookie</button>
            </section>

            <!-- Local Storage Management -->
            <section>
                <h2>Local Storage Manager</h2>
                <label for="localStorageValue">Enter Data:</label>
                <input type="text" id="localStorageValue" placeholder="Enter value">
                <button onclick="saveToLocalStorage()">Save Data</button>
                <h3>Saved Data:</h3>
                <p id="savedData"></p>
            </section>

            <!-- Session Management -->
            <section>
                <h2>Session Manager</h2>
                <p id="pageCounts"></p>
                <a href="cookie-demo.php?page=1">Page number 1</a><br>
                <a href="cookie-demo.php?page=2">Page number 2</a>
            </section>
        </main>
    </div>

    <script>
        // Handle session counts
        const params = new URLSearchParams(window.location.search);
        const pageNumber = params.get('page') || "1";
        incrementSessionCount(pageNumber);

        // Display session data
        displaySessionCounts();
    </script>
</body>
</html>
