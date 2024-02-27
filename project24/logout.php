<?php
session_start();
session_regenerate_id(true);
session_destroy();
setcookie('logged_in', "", 1, "/", true, http_only, secure);
header('Location: login.php')
?>