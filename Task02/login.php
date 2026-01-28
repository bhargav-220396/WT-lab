<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
exit;
session_start();          // 1️⃣ Start session
include "db.php";         // 2️⃣ DB connection

// 3️⃣ Run only when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // 4️⃣ Get user from database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    // 5️⃣ Check if user exists
    if (mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        // 6️⃣ Verify password
        if (password_verify($password, $user['password'])) {

            // 7️⃣ Save user info in session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            // 8️⃣ Redirect to dashboard
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
