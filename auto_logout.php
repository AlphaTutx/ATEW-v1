<?php
$db = mysqli_connect('localhost', 'root', '', 'project');

// Timeout: 20 seconds
$timeout = 20;

mysqli_query($db, "
    UPDATE users
    SET is_logged_in = 0
    WHERE last_seen < (NOW() - INTERVAL $timeout SECOND)
");

?>
