<!-- courses.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khóa học</title>
    <style>
        /* CSS Styles */
        .course-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 cột có chiều rộng bằng nhau */
            gap: 20px; /* Khoảng cách giữa các ô */
        }

        .course {
            background-color: #f9f9f9;
            padding: 10px;
        }

        .course h2 {
            color: #333;
        }

        .course p {
            color: #666;
        }
        h1 {
            border-left: 2px solid #000; /* Border phải cho h1 */
            padding-left: 10px; /* Khoảng cách giữa border và nội dung của h1 */
            display: inline-block; /* Để h1 không chiếm toàn bộ chiều rộng */
            margin-right: 20px; /* Khoảng cách giữa h1 và lưới khóa học */
        }
        .course img {
            max-width: 100%; /* Đảm bảo ảnh không vượt quá kích thước của phần tử cha */
            display: block; /* Để loại bỏ khoảng trắng dư thừa dưới ảnh */
            margin-bottom: 10px; /* Khoảng cách giữa ảnh và các phần tử khác */
        }
    </style>
</head>
<body>

<h1>Khóa học sắp khai giảng</h1>
      <div class="course-grid">
        <?php
        $courses = [
            [
                    'image' => 'https://haidangmobile.vn/wp-content/uploads/2023/10/iPhone-15-Pro-Colors-Mock-Feature-2.jpg',
                'title' => 'Học viện quốc tế',
                'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ Aptech Global. Phát triển  nghề nghiệp sinh viên IT như một lập trình viên quốc tế.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration'=> '2 - 2.5 năm'
            ],
            [
                'image' => 'https://haidangmobile.vn/wp-content/uploads/2023/10/iPhone-15-Pro-Colors-Mock-Feature-2.jpg',
                'title' => 'Lập trình Web Fullstack',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration'=> '2 - 2.5 năm'
            ],
            [
                    'image' => 'https://haidangmobile.vn/wp-content/uploads/2023/10/iPhone-15-Pro-Colors-Mock-Feature-2.jpg',
                'title' => 'Lập trình Web Fullstack',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration'=> '2 - 2.5 năm'
            ],
            [
                'image' => 'https://www.edgemiddleeast.com/cloud/2023/09/13/iPhone-15.jpg',
                'title' => 'Lập trình Web Fullstack',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration'=> '2 - 2.5 năm'
            ],
            [
                'image' => 'https://www.edgemiddleeast.com/cloud/2023/09/13/iPhone-15.jpg',
                'title' => 'Lập trình Web Fullstack',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration'=> '2 - 2.5 năm'
            ],
            [
                'image' => 'https://www.edgemiddleeast.com/cloud/2023/09/13/iPhone-15.jpg',
                'title' => 'Lập trình Web Fullstack',
                'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
                'fee' => '15.000.000 VND',
                'start_date' => '2/2/24',
                'duration'=> '2 - 2.5 năm'
            ],
        ];
        foreach ($courses as $course) : ?>
    <div class="course">
        <img src="<?php echo $course['image']; ?>" alt="<?php echo $course['title']; ?>">
        <h2><?php echo $course['title']; ?></h2>
        <p><?php echo $course['description']; ?></p>
        <p>Học phí: <?php echo $course['fee']; ?></p>
        <p>Khai giảng: <?php echo $course['start_date']; ?></p>
        <p>Thời lượng: <?php echo $course['duration']; ?></p>
    </div>
    <?php endforeach; ?>
    </div>

</body>
</html>


