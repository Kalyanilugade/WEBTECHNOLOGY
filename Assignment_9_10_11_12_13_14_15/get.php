<?php
// Start session
session_start();

// Retrieve session and cookie
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Session not set';
$email = isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : 'Cookie not set';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Session & Cookie</title>
</head>
<body>
    <h2>Retrieved Information</h2>
    <p><strong>Username from session:</strong> <?php echo $username; ?></p>
    <p><strong>Email from cookie:</strong> <?php echo $email; ?></p>
</body>
</html>
