<?php
$db = mysqli_connect('sql100.infinityfree.com', 'if0_40507997', 'JWtgJvb8Zyyql', 'if0_40507997_project');

// Timeout: 20 seconds
$timeout = 20;

mysqli_query($db, "
    UPDATE users
    SET is_logged_in = 0
    WHERE last_seen < (NOW() - INTERVAL $timeout SECOND)
");

?>