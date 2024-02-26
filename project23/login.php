<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=assets\style.css>
    <title>Login Form</title>
</head>
<body>
<div class="container">
    <form class="form" action="process_login.php" method="post" enctype="multipart/form-data">
        <h2>Login Form</h2>
        Username
        <br>
        <input type="text" name="username" required> <!-- Không cho phép để trống-->
        <br>
        Password
        <br>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>