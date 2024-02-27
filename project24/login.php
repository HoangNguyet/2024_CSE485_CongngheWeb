<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$users = [
    [
        "username" => "phuong",
        "password" => password_hash("123", PASSWORD_DEFAULT),
        "name" => "Nguyen Phuong",
        "email" => "phuong@example.com",
        "role" => "user"
    ],
    [
        "username" => "hoang",
        "password" => password_hash("456", PASSWORD_DEFAULT),
        "name" => "Minh Hoang",
        "email" => "hoang@example.com",
        "role" => "admin"
    ]
];

$authorization_levels = [
    "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false
    ],
    "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<form action="process_login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>
</body>
</html>

