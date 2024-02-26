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
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra xem tên người dùng đã tồn tại chưa
    $user = null;
    foreach ($users as $us)
    {
        if($us['username'] == $username)
        {
            $user = $us;
            break;
        }
    }
    if($user && password_verify($password, $user['password']))
    {
        // Nếu đăng nhập thành công?
        $_SESSION['user_id'] = $user['username']; // Lưu id người dùng vào session
        setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // cài đặt cookie cho 30 ngày
        header("Location: profile.php");
    }
    else{
        // Đăng nhập không thành công?
        echo "Invalid username or password";
    }
?>