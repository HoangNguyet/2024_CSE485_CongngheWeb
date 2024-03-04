 // tệp tin khởi động website
<?php
// khai báo thư viện
require_once "../config.php"; // Khai báo thông tin kết nối cơ so du lieu
require_once "../functions.php"; // Truy cap cac ham
global $conn;
// Khởi tạo các biến
$url = $_SERVER['REQUEST_URI']; /// Lấy url hien tai cua web duoc truy cap
$method = $$_SERVER['REQUEST_METHOD']; // Lay phuong thuc http duoc su dung de truy cap url
$data = $_POST; // lay du lieu duoc gui len tu phuong thuc post

// Xử lý yêu cầu
if($url == '/' && $method == 'GET'){ // kiem tra xem url hien tai co phai trang chu va phuong thuc truy cap co phai GET hay khong
    // Hiển thị trang chủ
    require_once '../views/home.php';
}elseif($url == 'login' && $method == 'POST'){ // Kiem tra url hien tai co phai login hay khong va phuong thuc truy cap co phai Post khong
    // Xử lý đăng nhập
    $username = $data['username']; // Lấy tên người duùng
    $userpass = $data['password']; // Lấy mật khẩu
    $sql = "select * from user where username = 'username' and password = 'password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        require_once "../views/home.php";
    }else{
        echo "Đăng nhập thất bại";
    }

}else{
    //Hiển thị thông báo lỗi
    echo "<h1>404 Not Found</h1>";
}

?>
