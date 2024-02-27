<?php
global $users;
include "users.php";
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
    $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
}

echo "<h2>Users</h2>";
echo "<table border='1'>";
echo
"<tr><th>Username</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr>";
foreach ($users as $u) {
    echo "<tr>";
    echo "<td>" . $u['username'] . "</td>";
    echo "<td>" . $u['name'] . "</td>";
    echo "<td>" . $u['email'] . "</td>";
    echo "<td>" . $u['role'] . "</td>";
    echo "<td>";
    // Chiỉnh sửa ngươời dùng
    if ($u['username'] !== $_SESSION['user_id']) { // chặn chỉnh sửa bản thân
        echo "<a href='edit_user.php?username=" . $u['username'] . "'>Edit</a>";
    }
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>