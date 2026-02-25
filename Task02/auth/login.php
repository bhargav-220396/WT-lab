<?php
session_start();
require __DIR__ . '/../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']) ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        die("Username or password missing");
    }

    // Find user in MongoDB
    $user = $users->findOne(['username' => $username]);

    if (!$user) {
        die("User not found");
    }

    // Verify password
    if (!password_verify($password, $user['password'])) {
        die("Invalid password");
    }

    // Login success
    $_SESSION['user_id'] = (string) $user['_id'];   // MongoDB ObjectId
    $_SESSION['username'] = $user['username'];

    header("Location: /user/dashboard.php");
    exit;
}
?>
