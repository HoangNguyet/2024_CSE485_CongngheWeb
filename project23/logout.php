<?php
session_start();

// Hủy tất cả các biến phiên
$_SESSION = array();

// Hủy phiên
session_destroy();

// Hết hạn cookie 'logged_in'
setcookie('logged_in', "", 1, "/");

// Chuyển hướng về trang đăng nhập
header('Location: login.php');
exit;
?>

