<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Danh sách khóa học</title>
    <style>
        
        </style>
</head>
<body>
    <?php
    $courses = [ 
        [
            'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Gobal. Phát triển nghề nghiệp sinh siên IT như một lập trình viên quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' =>'2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
    ];
        foreach($courses as $courses)
        {
            echo '<div class = "course">';
            echo '<h2>'.$courses['title'].'</h2>';
            echo '<p>'.$courses['description'].'</p>';
            echo '<p> Học phí: '.$courses['fee'].'</p>';
            echo '<p>Ngày khai giảng:'.$courses['start_date'].'</p>';
            echo '<p>Thời lượng:'.$courses['duration'].'</p>';
            echo '</div>';
        }
    
    $courses = [ 
        [
            'title' => 'LẬP TRÌNH WEB FULLSTACK',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Gobal. Phát triển nghề nghiệp sinh siên IT như một lập trình viên quốc tế.',
            'fee' => '15 % học phí',
            'start_date' =>'2/2/24',
            'duration' => '6 tháng'
        ],
    ];
        foreach($courses as $courses)
        {
            echo '<div class = "course">';
            echo '<h2>'.$courses['title'].'</h2>';
            echo '<p>'.$courses['description'].'</p>';
            echo '<p> Ưu đãi giảm: '.$courses['fee'].'</p>';
            echo '<p>Ngày khai giảng:'.$courses['start_date'].'</p>';
            echo '<p>Thời lượng:'.$courses['duration'].'</p>';
            echo '</div>';
        }
    
        $courses = [ 
            [
                'title' => 'LẬP TRÌNH JAVA FULLSTACK',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Gobal. Phát triển nghề nghiệp sinh siên IT như một lập trình viên quốc tế.',
                'fee' => '15 % học phí',
                'start_date' =>'2/2/24',
                'duration' => '236 giờ'
            ],
        ];
            foreach($courses as $courses)
            {
                echo '<div class = "course">';
                echo '<h2>'.$courses['title'].'</h2>';
                echo '<p>'.$courses['description'].'</p>';
                echo '<p> Ưu đãi giảm: '.$courses['fee'].'</p>';
                echo '<p>Ngày khai giảng:'.$courses['start_date'].'</p>';
                echo '<p>Thời lượng:'.$courses['duration'].'</p>';
                echo '</div>';
            }
            ?>


</body>
</html>