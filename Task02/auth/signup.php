<?php
include __DIR__ . '/../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']) ?? '';

    $password = $_POST['password'] ?? '';

    $confirm_password = $_POST['confirm_password'] ?? '';

    $service = trim($_POST['service']) ?? '';

    $budget = trim($_POST['budget']) ?? '';

    //validating the userame by using strlen function
    if (strlen($username) < 3) {
        die("Username must be at least 3 characters long");
    }

    if (strlen($password) < 6) {
        die("Password must be at least 6 characters long");
    }

    $username = strtolower($username);
    $username = ucwords($username);

    $username = htmlspecialchars($username);
    $service = htmlspecialchars($service);


    if ($password !== $confirm_password) {
        echo "Passwords do not match";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // 4. Insert into database
    try {

    $insertResult = $users->insertOne([
        'username' => $username,
        'password' => $hashed_password,
        'service' => $service,
        'budget' => $budget,
        //'createdAt' => new MongoDB\\BSON\\UTCDateTime()
    ]);

    echo "Signup successful!";

    } catch (MongoDB\\Driver\\Exception\\Exception $e) {

        if (str_contains($e->getMessage(), 'duplicate')) {
            echo "Username already exists!";
        } else {
            echo "Database error occurred.";
        }
    }

    if ($insertResult->getInsertedCount() === 1) {
        echo "Signup successful!";
    } else {
        echo "Error occurred";
    }

    } else {
        echo "Invalid request";
    }
?>
