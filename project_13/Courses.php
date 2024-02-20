<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>DANH SACH KHOA HOC</title>
    <style>
        .course{
            display: block;
            background-color: #f9f9f9;
            padding:10px;
            margin-bottom: 20px;
        }
        .course h2{
            color: #333;
            font-size: 12px;
        }
        .course p{
            color: #666;
        }
        .container>h2{
            color: tomato;
            border-left: 4px solid brown;
            padding-left: 16px;
            font-size: 16px;
            font-weight: 700;
        }
        .row h2{
            font-size:20px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<?php
$courses =[
    [
        'title'=>"Học viên quốc tế",
        'description'=>"Chuong trình đào tao tai việt nam",
        'fee'=>'15.000.000 VND',
        'start_date'=>'2/2/24',
        'duration'=>'2 - 2,5 năm'
    ],
    [
        'title'=>"Học viên quốc tế",
        'description'=>"Chuong trình đào tao tai việt nam",
        'fee'=>'15.000.000 VND',
        'start_date'=>'2/2/24',
        'duration'=>'2 - 2,5 năm'
    ],[
        'title'=>"Học viên quốc tế",
        'description'=>"Chuong trình đào tao tai việt nam",
        'fee'=>'15.000.000 VND',
        'start_date'=>'2/2/24',
        'duration'=>'2 - 2,5 năm'
    ],
    [
        'title'=>"Học viên quốc tế",
        'description'=>"Chuong trình đào tao tai việt nam",
        'fee'=>'15.000.000 VND',
        'start_date'=>'2/2/24',
        'duration'=>'2 - 2,5 năm'
    ],[
        'title'=>"Học viên quốc tế",
        'description'=>"Chuong trình đào tao tai việt nam",
        'fee'=>'15.000.000 VND',
        'start_date'=>'2/2/24',
        'duration'=>'2 - 2,5 năm'
    ],
    [
        'title'=>"Học viên quốc tế",
        'description'=>"Chuong trình đào tao tai việt nam",
        'fee'=>'15.000.000 VND',
        'start_date'=>'2/2/24',
        'duration'=>'2 - 2,5 năm'
    ],
];
?>
<div class="container">
    <h2>Khóa học sắp khai giảng</h2>
    <div class="row">
        <?php
        foreach ($courses as $course){
            echo'
            <div class="col-4">
                <img src="https://devo.vn/wp-content/uploads/2023/01/meo-buon-ba.jpg" class="card-img-top" alt="Ảnh con mèo">
                <div class="card_body">
                <h2>'.$course['title'].'</h2>
                <h2>'.$course['description'].'</h2>
                <p> Học phí:' .$course['fee'].'</p>
                <p>Khai Giảng: '.$course['start_date'].'</p>
                <p>Thời lượng: '.$course['duration'].'</p>
</div> 
            </div>
            ';
        }

        ?>
    </div>
</div>
</body>
</html>