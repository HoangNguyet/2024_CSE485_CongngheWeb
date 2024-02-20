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
    <title>Tlu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .header {
            display: flex;
            background-color: #2b3f8d;
        }

        li {
            list-style-type: none;
            padding: 0 8px;
            color: #fff;
            font-size: 13px;
            border-left: 1px solid #fff;
        }

        span {
            padding: 0 0px;
        }
    </style>
</head>

<body>

<div class="header">
    <?php
        echo"
        <ul class='nav'>
        <li class='nav-item'>
        <i class='fa-solid fa-house'></i>
        </li>
        ";
       foreach($navItems as $item){
           echo"<ul>
            <li>
            <span>$item</span>
</li>
            </ul>
";
       }
    ?>
</div>
</body>

</html>