<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    session_regenerate_id(true); // Generate a new session ID for enhanced security
    session_destroy();
    setcookie('logged_in', "", 1, "/", true, 'http_only', 'secure'); 
    header('Location: login.php');
?>
</body>
</html>