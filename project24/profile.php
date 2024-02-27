<?php
global $users, $authorization_levels;
include "users.php";
// Trang hiển thị thông tin người dùng
session_start(); // Băt đầu một phiên làm việc
// Kiểm tra xem liệu thông tin xác thực cuả người dùng được lưu trong phiên làm
// việc không, hoặc xem liệu có 1 coolie tên 'logged_in' được gửi từ trình duyệt của người dùng hay không
// Nếu không là người dùng chưa đăng nhập hoặc phiên làm việc đã hết hạn
if(!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']))
{
    header("Location: login.php");
}
$username = $_SESSION['user_id'];
$user = null;
foreach ($users as $u)
{
    if($u['username'] == $username)
    {
        $user = $u;
        break;
    }
}
if($user){
    $user_role = $_SESSION['user_role'];
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
    if($authorization_levels[$user_role]['edit_profile'])
    {
        echo "<br>Edit bassic profile information";
    }
    if($user_role == "admin" && $authorization_levels[$user_role]['access_admin_panel']){
        echo "<br><a href='admin_panel.php'>Admin Panel</a>";
    }
}
else{
    echo "Error: User not found";
}
?>