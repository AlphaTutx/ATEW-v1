<?php
session_start();

if (isset($_SESSION['username'])) {
    $db = mysqli_connect('sql100.infinityfree.com', 'if0_40507997', 'JWtgJvb8Zyyql', 'if0_40507997_project');
    $username = $_SESSION['username'];

    // Mark as logged out
    mysqli_query($db, "UPDATE users SET is_logged_in = 0 WHERE username='$username'");
}

session_destroy();
unset($_SESSION['username']);

header("Location: index.php");
exit();
?>