<?php
session_start();

if (!isset($_SESSION['username'])) {
    exit();
}

$db = mysqli_connect('localhost', 'root', '', 'project');
$username = $_SESSION['username'];

mysqli_query($db, "UPDATE users SET last_seen = NOW() WHERE username='$username'");
mysqli_query($db, "UPDATE users SET is_logged_in = 0 WHERE username='$username'");
?>