<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GIÁO DỤC & ĐÀO TẠO</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
<?php
    $navItem1 = "";
    $navItems = [
        "GIỚI THIỆU",
        "TIN TỨC & THÔNG BÁO",
        "TUYỂN SINH",
        "ĐÀO TẠO",
        "NGHIÊN CỨU",
        "ĐỐI NGOẠI",
        "VĂN BẢN",
        "SINH VIÊN",
        //"LIÊN HỆ"
    ];
    $navItemlast = "LIÊN HỆ";
?>
<nav>
    <ul>
        <li><?php echo $navItem1; ?></li>
        <?php foreach ($navItems as $item): ?>
            <li id="main"><?php echo $item; ?></li>
        <?php endforeach; ?>
        <li><?php echo $navItemlast; ?></li>
    </ul>
</nav>
</body>
</html>
