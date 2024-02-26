<?php
    session_start();
    session_destroy(); // phá session
    setcookie('logged_in', "", 1, "/");
    header("Location: login.php");
?>