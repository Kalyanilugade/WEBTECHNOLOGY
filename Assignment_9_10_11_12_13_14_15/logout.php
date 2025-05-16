<?php
session_start();
session_destroy();

// Expire the cookie
setcookie('username', '', time() - 3600);

header("Location: index.php");
exit();
?>
