<?php
// Dữ liệu minh họa
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt.",
        "image" =>"assets/images/Tshirt.jpg" // Đường dẫn đến ảnh sản phẩm
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean.",
        "image" =>"assets/images/jean.jpg"
    ],
    [
        "id" => 3,
        "name" => "Jacket",
        "price" => 50,
        "description" => "A comfortable and stylish Jacket.",
        "image" =>"assets/images/aoKhoac.webp"
    ],
    [
        "id" => 4,
        "name" => "Dress",
        "price" => 30,
        "description" => "A comfortable and stylish dress.",
        "image" =>"assets/images/20210120_dy4cQVwT8PDqBQsfEhSyShCt.jpg" // Đường dẫn đến ảnh sản phẩm
    ],
    [
        "id" => 5,
        "name" => "Short",
        "price" => 15,
        "description" => "A comfortable and stylish Short.",
        "image" =>"assets/images/quan-dui-jeans-nu-cao-cap-768-1.jpg"
    ],
];

// Tham số phân trang
$itemsPerPage = 4; // Số mục trên mỗi trang
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại

// Tính toán dữ liệu phân trang
$totalPages = ceil(count($products) / $itemsPerPage); // Tổng số trang
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage); // Các mục của trang hiện tại

// Tạo trang HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="product-list">
    <?php foreach ($currentPageItems as $product): ?>
        <div class="product">
            <a href="product_detail.php?id=<?php echo $product['id']; ?>">
                <div class="image">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                </div>
                <div class="details">
                    <h2><?php echo $product['name']; ?></h2>
                    <p><strong>Price:</strong> $<?php echo $product['price']; ?></p>
                    <p><strong>Description:</strong> <?php echo $product['description']; ?></p>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
</div>

</body>
</html>
