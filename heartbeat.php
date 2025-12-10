<?php
session_start();

if (!isset($_SESSION['username'])) {
    exit();
}

$db = mysqli_connect('sql100.infinityfree.com', 'if0_40507997', 'JWtgJvb8Zyyql', 'if0_40507997_project');
$username = $_SESSION['username'];

mysqli_query($db, "UPDATE users SET last_seen = NOW() WHERE username='$username'");
mysqli_query($db, "UPDATE users SET is_logged_in = 0 WHERE username='$username'");
?>