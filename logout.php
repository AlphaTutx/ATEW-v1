<?php
session_start();

if (isset($_SESSION['username'])) {
    $db = mysqli_connect('localhost', 'root', '', 'project');
    $username = $_SESSION['username'];

    // Mark as logged out
    mysqli_query($db, "UPDATE users SET is_logged_in = 0 WHERE username='$username'");
}

session_destroy();
unset($_SESSION['username']);

header("Location: index.php");
exit();
?>