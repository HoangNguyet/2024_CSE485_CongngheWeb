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
    global $users;
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_found = false;
    foreach ($users  as $u)
    {
        if($u['username'] == $username && password_verify($password, $u['password']))
        {
            $user_found = true;
            $_SESSION['user_id'] = $u['username'];
            $_SESSION['user_role'] = $u['role']; 
            break;
        }
    }
    if($user_found) 
    {
        setcookie('logged_in', true, time()+60*60*24*30, "/"); 
        header("location: profile.php");
    }
    else{
        echo "Invalid username or password";
    }
?>
</body>
</html>