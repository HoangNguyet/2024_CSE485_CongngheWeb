<?php

global $users;
session_start();
    include "users.php";
    // Lấy dữ liệu người dùng trên form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_found = false;
    foreach ($users  as $u)
    {
        //Kiểm tra xem dữ liệu nhập vào có đúng
        if($u['username'] == $username && password_verify($password, $u['password']))
        {
            $user_found = true;
            $_SESSION['user_id'] = $u['username'];//Lưu trữ tên người duùng trong biến phiên, theo doõi người dùng và xem ai đang đăng nhập
            $_SESSION['user_role'] = $u['role']; // thiết lập 1 phiên để xác định vai trò nguười dùng sau khi họ đăng nhập
            break;
        }
    }
    if($user_found) // nếu tìm thấy người dùng
    {
        setcookie('logged_in', true, time()+60*60*24*30, "/"); // cài đặt cookie trong 30 ngày
        header("location: profile.php");
    }
    else{
        echo "Invalid username or password";
    }
?>
