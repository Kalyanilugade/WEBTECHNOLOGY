
<?php
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    // Store in session
    $_SESSION['username'] = $name;

    // Store in cookie (expires in 1 hour)
    setcookie('username', $name, time() + 3600);
    
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session & Cookie Demo</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form method="post">
        <input type="text" name="name" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
