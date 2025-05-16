<?php
// Start session
session_start();

// Set a session variable
$_SESSION['username'] = 'kalyani';

// Set a cookie (expires in 1 hour)
setcookie('user_email', 'kalyani@example.com', time() + 3600, "/");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Set Session & Cookie</title>
</head>
<body>
    <h2>Session and Cookie are set!</h2>
    <p><a href="get.php">Go to next page to retrieve them</a></p>
</body>
</html>
