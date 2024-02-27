<?php
session_start();

// Định nghĩa mảng người dùng
$users = [
    [
        "username" => "john",
        "password" => password_hash("123", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com"
    ],
    // Thêm người dùng khác nếu cần
];

$username = $_POST['username'];
$password = $_POST['password'];

// Kiểm tra xem username có tồn tại trong mảng không
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user && password_verify($password, $user['password'])) {
    // Đăng nhập thành công
    $_SESSION['user_id'] = $user['username']; // Lưu ID người dùng vào phiên
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Thiết lập cookie trong 30 ngày
    header('Location: profile.php'); // Chuyển hướng đến trang hồ sơ
    exit;
} else {
    // Đăng nhập thất bại
    echo "<div class='login-container'><p>Invalid username or password.</p></div>";
}
?>
