<?php
$users = [
    [
        "username" => "Hoàng Ánh Nguyệt",
        "password" => password_hash("31012003", PASSWORD_DEFAULT),
        "name" => "Nguyệt",
        "email" => "nguyethoanghan@gmail.com"
    ],
    [
        "username" => "Nguyễn Thị Thanh Mai chó",
        "password" => password_hash("khongbiet", PASSWORD_DEFAULT),
        "name" => "Mai ăn cứt",
        "email" => "maingu@gmail.com"
    ],
    [
        "username" => "Hoàng Minh Nghĩa",
        "password" => password_hash("14012016", PASSWORD_DEFAULT),
        "name" => "Nghĩa",
        "email" => "hoangminhnghia@gmail.com"
    ],
    [
        "username" => "Hoàng Minh Hải",
        "password" => password_hash("22092007", PASSWORD_DEFAULT),
        "name" => "Hải",
        "email" => "hoangminhhai@gmail.com"
    ],
];
session_start();
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
if($user)
{
    // Hiển thị thị thông tin người dùng
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " .$user['email'];
}
else{
    echo "Error: User not found";
    header("Location: login.php");
}
?>