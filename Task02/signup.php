<?php
include "db.php";

// run code ONLY if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Get form data safely
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $service = $_POST['service'] ?? '';
    $budget = $_POST['budget'] ?? '';

    // 2. Validate
    if ($password !== $confirm_password) {
        echo "Passwords do not match";
        exit;
    }

    // 3. Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 4. Insert into database
    $sql = "INSERT INTO users (username, password, service, budget)
            VALUES ('$username', '$hashed_password', '$service', '$budget')";

    if (mysqli_query($conn, $sql)) {
        echo "Signup successful!";
    } else {
        echo "Error occurred";
    }

} else {
    echo "Invalid request";
}
?>