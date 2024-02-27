<?php
session_start();
require_once 'login.php'; // Include the file where $users and $authorization_levels are defined

// Check if user is logged in and has admin role
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
    exit();
}


$username = $_GET['username'];
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

// If user not found, redirect back
if (!$user) {
    header('Location: admin_panel.php');
    exit();
}

// Handle form submission if any
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Location: admin_panel.php');
    exit();
}
?>




