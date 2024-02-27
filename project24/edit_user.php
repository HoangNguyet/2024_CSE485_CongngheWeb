<?php
global $users;
include "users.php";
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
    $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
}
$username = $_GET['username']; // lấy tên người dùng từ URL
//tìm dữ liệu người dùng
foreach ($users as $u)
{
    if($u['username'] == $username)
    {
        $user = $u;
        break;
    }
}
// Nếu tìm thấy, hiển thị thông tin người dùng
if($user)
{
    echo "Welcome, " >$user['name'] . "!";
    echo "<br>Email: " .$user['email'];
    echo "<h2>Chỉnh sửa người dùng: " .$user['name'] . "</h2>";
    ?>
    <form action="update_user.php" method="post" enctype="multipart/form-data">
        Tên người dùng:
        <br>
        <input style="margin: 5px" type="text" name="username" value="<?php echo $user['username'];?>">
        <br>
        Tên mới:
        <br>
        <input style="margin: 5px" type="text" name="new_name">
        <br>
        <button style="padding: 3px; color: #f9f9f9; background-color: #2121a9; margin: 3px" type="submit">Lưu</button>
    </form>
<?php
}else{
    echo "Người dùng không tồn tại!";
}
?>