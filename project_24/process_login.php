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
    global $users;
    session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_found = false;
        foreach ($users as $u) {
            if ($u['username'] == $username && password_verify($password, $u['password'])) {
                $user_found = true;
                $_SESSION['user_id'] = $u['username'];
                $_SESSION['user_role'] = $u['role'];
                break;
            }
        }
        if ($user_found) {
            setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
            header('Location: profile.php');
        }
        else {
            echo "Invalid username or password.";
        }
?>
</body>
</html>