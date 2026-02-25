<?php
session_start();
require __DIR__ . '/../config/db.php';

// Protect page (only logged-in users can view)
if (!isset($_SESSION['user_id'])) {
    die("Unauthorized access");
}

$allUsers = $users->find();
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Users</title>
</head>
<body>

<h2>Registered Users</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Username</th>
        <th>Service</th>
        <th>Budget</th>
    </tr>

    <?php foreach ($allUsers as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user['username']); ?></td>
            <td><?php echo htmlspecialchars($user['service']); ?></td>
            <td><?php echo htmlspecialchars($user['budget']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<br>
<a href="/user/dashboard.php">Back to Dashboard</a>

</body>
</html>
