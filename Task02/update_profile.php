<?php
session_start();
require "db.php";

// Protect page
if (!isset($_SESSION['user_id'])) {
    die("Unauthorized access");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newService = trim($_POST['service']) ?? '';
    $newBudget = trim($_POST['budget']) ?? '';

    if ($newService === '' || $newBudget === '') {
        die("Fields cannot be empty");
    }

    try {
        $updateResult = $users->updateOne(
            ['_id' => new MongoDB\BSON\ObjectId($_SESSION['user_id'])],
            ['$set' => [
                'service' => $newService,
                'budget' => $newBudget
            ]]
        );

        if ($updateResult->getModifiedCount() === 1) {
            echo "Profile updated successfully! <br><br>";
        } else {
            echo "No changes made.<br><br>";
        }

        echo '<a href="dashboard.php">Back to Dashboard</a>';

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>