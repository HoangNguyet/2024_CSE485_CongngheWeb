<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 $users = [
        [
            "username" => "lanhuong",
            "password" => password_hash("31101977", PASSWORD_DEFAULT),
            "name" => "Huong",
            "email" => "lanhuongbn@gmail.com",
            "role" => "admin",
        ],
        [
            "username" => "mikebrown",
            "password" => password_hash("02101999", PASSWORD_DEFAULT),
            "name" => "Mike Brown",
            "email" => "mikebrown@example.com",
            "role" => "user",
        ]
    ];
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
        $_SESSION['user_role'] !== "admin") {
        header('Location: login.php');
    }
    $username = $_GET['username']; 
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
</body>
</html>
