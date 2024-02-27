<?php
session_start();
require_once 'login.php';

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || $_SESSION['user_role'] !== "admin") {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h2>Admin Panel</h2>
<table border='1'>
    <tr>
        <th>Username</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $u): ?>
        <tr>
            <td><?= $u['username'] ?></td>
            <td><?= $u['name'] ?></td>
            <td><?= $u['email'] ?></td>
            <td><?= $u['role'] ?></td>
            <td><a href='edit_user.php?username=<?= $u['username'] ?>'>Edit</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

