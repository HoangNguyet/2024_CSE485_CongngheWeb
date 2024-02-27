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
        ],
        [
            "username" => "mikebrown",
            "password" => password_hash("02101999", PASSWORD_DEFAULT),
            "name" => "Mike Brown",
            "email" => "mikebrown@example.com",
        ]
    ];
    $authorization_levels = [
        "user" => 
        [
            "access_profile" => true,
            "edit_profile" => true,
            "access_admin_panel" => false
        ],
        "admin" => 
        [
            "access_profile" => true,
            "edit_profile" => true,
            "access_admin_panel" => true,
            "manage_users" => true
        ]
    ];
    global $users, $authorization_levels;
    session_start();// Dùng $_SESSION phải khai báo session_start() ở đầu file
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
</body>
</html>