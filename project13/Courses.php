<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MY COURSES</title>
    <link rel="stylesheet", href="style.css">
</head>
<body>
    <div id="nav1">
        <h2>KHÓA HỌC SẮP KHAI GIẢNG</h2>
    </div>
    <?php
    $courses1 = [
        [
            'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
            'image' => 'image\world.jpg',
            'description' => 'Chương trình đào tạo chuẩn quốc tết và toàn diện. Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'fee' => '15.000.000 VNĐ',
            'start_date'=> '2/2/2024',
            'duration'=> '2-2.5 năm'
        ],
        [
            'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
            'image' => 'image\1200x628-4-.png',
            'description' => 'Chương trình đào tạo chuẩn quốc tết và toàn diện. Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'fee' => '15.000.000 VNĐ',
            'start_date'=> '2/2/2024',
            'duration'=> '2-2.5 năm'
        ],
        [
            'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
            'image' => 'image\baiviet-tkw.jpg',
            'description' => 'Chương trình đào tạo chuẩn quốc tết và toàn diện. Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'fee' => '15.000.000 VNĐ',
            'start_date'=> '2/2/2024',
            'duration'=> '2-2.5 năm'
        ]
    ];
    ?>
<!--    Hiến thị danh sách khóa học-->
    <div class="courses-container">
        <?php foreach ($courses1 as $course): ?>
            <div class="course">
                <h2><?php echo $course['title']; ?></h2>
                <?php if (!empty($course['image'])): ?>
                    <img src="<?php echo $course['image']; ?>"
                <?php endif; ?> </br>
                <p><?php echo $course['description']; ?></p>
                <p>Học phí: <?php echo $course['fee']; ?></p>
                <p>Khai giảng: <?php echo $course['start_date']; ?></p>
                <p>Thời lượng: <?php echo $course['duration']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
    $courses2 = [
        [
            'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
            'image' => 'image\banner2-848x548.png',
            'description' => 'Chương trình đào tạo chuẩn quốc tết và toàn diện. Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'fee' => '15.000.000 VNĐ',
            'start_date'=> '2/2/2024',
            'duration'=> '2-2.5 năm'
        ],
        [
            'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
            'image' => 'image\lập-trình-web-min.png',
            'description' => 'Chương trình đào tạo chuẩn quốc tết và toàn diện. Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'fee' => '15.000.000 VNĐ',
            'start_date'=> '2/2/2024',
            'duration'=> '2-2.5 năm'
        ],
        [
            'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
            'image' => 'image\ltv.png',
            'description' => 'Chương trình đào tạo chuẩn quốc tết và toàn diện. Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề lập trình chuyên nghiệp.',
            'fee' => '15.000.000 VNĐ',
            'start_date'=> '2/2/2024',
            'duration'=> '2-2.5 năm'
        ]
    ];
    ?>
    <div class="courses-container">
        <?php foreach ($courses2 as $course): ?>
            <div class="course">
                <h2><?php echo $course['title']; ?></h2>
                <?php if (!empty($course['image'])): ?>
                    <img src="<?php echo $course['image']; ?>"
                <?php endif; ?> </br>
                <p><?php echo $course['description']; ?></p>
                <p>Học phí: <?php echo $course['fee']; ?></p>
                <p>Khai giảng: <?php echo $course['start_date']; ?></p>
                <p>Thời lượng: <?php echo $course['duration']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>