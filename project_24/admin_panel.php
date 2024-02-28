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

echo "<h2>Users</h2>";
echo "<table border='1'>";
echo
"<tr><th>Username</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr>";
foreach ($users as $u) {
    echo "<tr>";
    echo "<td>" . $u['username'] . "</td>";
    echo "<td>" . $u['name'] . "</td>";
    echo "<td>" . $u['email'] . "</td>";
    echo "<td>" . $u['role'] . "</td>";
    echo "<td>";
    if ($u['username'] !== $_SESSION['user_id']) {
        echo "<a href='edit_user.php?username=" . $u['username'] . "'>Edit</a>";
    }
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>