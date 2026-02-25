<?php
session_start();

// 1️⃣ Protect the page
if (!isset($_SESSION['user_id'])) {
    header("Location: /public/login.html");
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
<a href="/public/update_profile.html">
    <button>Update Profile</button>
</a>

<br/>


<br>

<a href="/user/delete_account.php" 
   onclick="return confirm('Are you sure you want to delete your account?');">
    <button style="color:red;">Delete Account</button>
</a>

<br>

<br>

<a href="/user/list_users.php">
    <button>View All Users</button>
</a>

<br>

<br>
<a href="/auth/logout.php">Logout</a>

</body>
</html>
