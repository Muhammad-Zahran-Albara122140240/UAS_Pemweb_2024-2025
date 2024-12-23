<?php
function register($pdo, $username, $email, $password) {
    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk insert user
    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':password' => $hashed_password
    ]);
    return true;
}

function login($pdo, $username, $password) {
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        return true;
    }
    return false;
}


?>
