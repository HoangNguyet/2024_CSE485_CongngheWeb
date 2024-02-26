<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets\style.css">
    <title>Form Settings</title>
</head>
<body>
<div class="container">
<?php
    $user =
        [
            'name' => 'Hoàng Ánh Nguyệt',
            'email' => 'nguyethoanghan@gmail.com',
            'avatar' => 'assets\img\avatar.jpg'
        ];
    ?>
<form class="form" action="update_profile.php" method="post" enctype="multipart/form-data">
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <h2>Profile Information</h2>
        <label for="name">Name:</label>
        <br>
        <input class="input" type="text" name="name" value="<?php echo $user['name']; ?>" required>
        <br>
        <label for="email">Email:</label>
        <br>
        <input class="input" type="email" name="email" value="<?php echo $user['email']; ?>" disabled>
        <br>
        <label for="avatar">Avatar:</label>
        <br>
        <input class="input" type="file" name="avatar" accept="image/*">
        <br>
        <button class="button" type="submit">Update Profile</button>
    </form>
</form>
</div>
</body>
</html>
