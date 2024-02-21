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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
    <style>
        /* CSS Styles */
        .navigation-menu {
            background-color: #4CAF50; /* Màu nền xanh */
            padding: 10px; /* Khoảng cách nền và các mục menu */
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px; /* Khoảng cách giữa các mục menu */
            border-left: 1px solid #fff; /* Border left cho mỗi mục */
            padding-left: 10px; /* Khoảng cách giữa border left và chữ */
        }

        nav ul li:first-child {
            border-left: none; /* Loại bỏ border left cho mục đầu tiên */
            padding-left: 0; /* Loại bỏ khoảng cách cho mục đầu tiên */
        }

        nav ul li a {
            text-decoration: none;
            color: #fff; /* Màu chữ trắng */
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Hiệu ứng chuyển đổi màu nền */
        }

        nav ul li a:hover {
            background-color: #45a049; /* Màu nền xanh khi di chuột qua */
        }
    </style>
</head>
<body>
<div class="navigation-menu">
    <nav>
        <ul>
            <?php foreach ($navItems as $item) : ?>
                <li><a href="#"><?php echo $item; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>
</body>
</html>



