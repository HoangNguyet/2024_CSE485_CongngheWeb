<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        * {
            margin: 1px;
            padding: 3px;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
            display: flex;
            align-items: center;
            background-color: blue;
        }
        i{
            margin: 0 8px;
            color: #fff;
        }
        nav>ul{
            display: flex;
            align-items: center;
            padding: 8px 0;
        }
        li{
            list-style: none;
            color: #fff;
            font-size: 14px;
            padding: 0 8px;
            border-left: 1px solid #111;
        }
    </style>
</head>
<body>
<?php
    $navItems = [
        "GIỚI THIỆU",
        "TIN TỨC & THÔNG BÁO",
        "TUYỂN SINH",
        "ĐÀO TẠO",
        "NGHIÊN CỨU",
        "ĐỐI NGOẠI",
        "VĂN BẢN",
        "SINH VIÊN",
        "LIÊN HỆ"
];
    echo '<div class="container"><i class="house fa-solid fa-house"></i><nav><ul> ';
    foreach ($navItems as $item) {
        echo "<li>$item</li>";
    }
    echo '</ul></nav></div>';
?>
</body>
</html>