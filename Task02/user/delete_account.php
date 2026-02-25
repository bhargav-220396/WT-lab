<?php
session_start();
require __DIR__ . '/../config/db.php';

// Protect page
if (!isset($_SESSION['user_id'])) {
    die("Unauthorized access");
}

try {

    $deleteResult = $users->deleteOne([
        '_id' => new MongoDB\\BSON\\ObjectId($_SESSION['user_id'])
    ]);

    session_destroy();

    if ($deleteResult->getDeletedCount() === 1) {
        echo "Account deleted successfully! <br><br>";
    } else {
        echo "Error deleting account.<br><br>";
    }

    echo '<a href="/public/login.html">Go to Login</a>';

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
