<?php
session_start();

// 1️⃣ Protect the page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Client Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['username']; ?> 👋</h2>

<p>This is your TechBridge dashboard.</p>

<a href="logout.php">Logout</a>

</body>
</html>