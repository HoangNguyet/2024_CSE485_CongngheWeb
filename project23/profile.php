<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa và có cookie 'logged_in' không
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php'); // Chuyển hướng về trang đăng nhập nếu chưa xác thực
    exit;
}

// Đảm bảo biến $users được định nghĩa và chứa dữ liệu người dùng
// Ví dụ: nếu dữ liệu người dùng được lưu trong một tệp riêng biệt có tên là 'users.php'
$users = [
    [
        "username" => "john",
        "password" => password_hash("123", PASSWORD_DEFAULT),
        "name" => "John Doe",
        "email" => "johndoe@example.com"
    ],
    // Thêm người dùng khác nếu cần
];
$username = $_SESSION['user_id'];

// Lấy dữ liệu người dùng từ mảng sử dụng tên người dùng
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user) {
    // Hiển thị thông tin người dùng
    echo "<h2>Welcome, " . $user['name'] . "!</h2>";
    echo "<p>Email: " . $user['email'] . "</p>";
    // ... hiển thị các chi tiết khác của người dùng
} else {
    echo "Error: User not found.";
}
?>
