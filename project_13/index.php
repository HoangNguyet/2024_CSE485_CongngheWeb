<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    
    </style>
</head>

<body>
    <?php
$courses = [
    [
        'title' => 'Lập trình web fullstack',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ fontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'fee' => '15% học phí',
        'start_date' => '2/2/24',
        'duration' => '6 tháng'
    ],
    [
        'title' => 'Lập trình web fullstack',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ fontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'fee' => '15% học phí',
        'start_date' => '2/2/24',
        'duration' => '6 tháng'
    ],
    [
        'title' => 'Lập trình java fullstack',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP,Spring Framework, EJB,...',
        'fee' => '15% học phí',
        'start_date' => '2/2/24',
        'duration' => '236 giờ'
    ],
    [
        'title' => 'Lập trình php & laravel',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP,Spring Framework, EJB,...',
        'fee' => '15% học phí',
        'start_date' => '2/2/24',
        'duration' => '236 giờ'
    ],
    [
        'title' => 'Lập trình web fullstack',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ fontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'fee' => '15% học phí',
        'start_date' => '2/2/24',
        'duration' => '6 tháng'
    ],
    [
        'title' => 'Lập trình web fullstack',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ fontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'fee' => '15% học phí',
        'start_date' => '2/2/24',
        'duration' => '6 tháng'
    ],
   
];
?>
    <div class="container">
        <h2>KHÓA HỌC SẮP KHAI GIẢNG</h2>
        <div class="row">
            <?php
            foreach($courses as $course){
                echo '
                <div class="col-4">
                    <div class="card" style="">
                        <img src="https://lotusacademy.edu.vn/api/media/download/735/FPTPolytechnic_vitrinaochosinhvienlaptrinhweb_0.jpg">
                        <div class="card-body">
                            <h2>' . $course['title'] . '</h2>
                            <p>' . $course['description'] . '</p>
                            <p>Học phí: ' . $course['fee'] . '</p>
                            <p>Khải giảng: ' . $course['start_date'] . '</p>
                            <p>Thời lượng: ' . $course['duration'] . '</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</body>

</html>