<?php
session_start();

$sessionName = isset($_SESSION['username']) ? $_SESSION['username'] : 'Session not set';
$cookieName = isset($_COOKIE['username']) ? $_COOKIE['username'] : 'Cookie not set';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h2>Welcome Page</h2>

    <p><strong>Session Value:</strong> <?= $sessionName ?></p>
    <p><strong>Cookie Value:</strong> <?= $cookieName ?></p>

    <a href="logout.php">Logout</a>
</body>
</html>
