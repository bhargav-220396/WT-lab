<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

session_start();          
include "db.php";         

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']) ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        die("Username or password missing");
    }

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header("Location: dashboard.php");
            exit;

        } else {
            echo "Invalid password";
        }

    } else {
        echo "User not found";
    }
}
?>
