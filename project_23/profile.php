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
        "password" => password_hash("30042003", PASSWORD_DEFAULT),
        "name" => "Huong",
        "email" => "lanhuongbn@gmail.com",
    ],
    [
        "username" => "mikebrown",
        "password" => password_hash("31101977", PASSWORD_DEFAULT),
        "password" => password_hash("", PASSWORD_DEFAULT),
        "name" => "Mike Brown",
        "email" => "mikebrown@example.com",
    ]
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
</body>
</html>