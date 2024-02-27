<?php
global $users;
include "users.php";
session_start();
// Kiểm tra xem người dùng đã đăng nhập với vai trò quản trị viên chưa
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
    exit;
}
// Kiểm tra xem dữ liệu được gửi từ biểu mẫu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ biểu mẫu
    $username = $_POST['username'];
    $new_name = $_POST['new_name'];

    // Tìm và cập nhật thông tin người dùng trong mảng $users
    foreach ($users as &$u) {
        if ($u['username'] == $username) {
            $u['name'] = $new_name;
            break;
        }
    }
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

}
echo "</table>";
?>