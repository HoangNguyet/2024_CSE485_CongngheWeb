<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <?php
    $products = [
        ["id" => 1,"name" => "T-Shirt","price" => 15.99,"description" => "A comfortable and stylish T-Shirt.", "image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 2,"name" => "Jean","price" => 23,"description" => "A comfortable and stylish Jean.", "image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 3,"name" => "Sweater","price" => 19.99,"description" => "A comfortable and stylish Sweater.","image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 4,"name" => "Shoes","price" => 39.99,"description" => "A comfortable and stylish pair of shoes.","image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 5,"name" => "Dress","price" => 29.99,"description" => "A beautiful and elegant dress.","image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 6,"name" => "Hat","price" => 9.99,"description" => "A stylish and trendy hat.","image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 7,"name" => "Socks","price" => 4.99,"description" => "A comfortable and colorful pair of socks.","image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 8,"name" => "Jacket","price" => 49.99,"description" => "A warm and stylish jacket.","image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 9,"name" => "Skirt","price" => 24.99,"description" => "A fashionable and trendy skirt.","image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 10,"name" => "Pants","price" => 34.99,"description" => "A comfortable and versatile pair of pants.","image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 11,"name" => "Blouse","price" => 19.99,"description" => "A stylish and elegant blouse.","image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        ["id" => 12,"name" => "Shorts","price" => 14.99,"description" => "A comfortable and casual pair of shorts.","image" => "https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png"],
        
    ];
    // so san pham tren moi trang
    $itemsPerPage = 4;
    // truy cap so trang hien tai
    $currentPage= isset($_GET['page']) ? $_GET['page'] : 1;
    // tinh tong so trang
    $totalPages = ceil(count($products) / $itemsPerPage);
    // tinh chi so bat dau cua san pham tren trang hien tai
    $startIndex = ($currentPage - 1) * $itemsPerPage;
    // lay ra cac san pham tren trang hien tai
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
    ?>
    <?php
    foreach ($currentPageItems as $product){
        echo'
            <div class="product">
                <img src="https://chiinstore.com/media/product/4552_634x634___2022_06_01t162723_142.png" class ="abc">
                <div class="card_body">
                    <h2>'.$product['name'].'</h2>
                    <h2>'.$product['price'].'</h2>
                    <h3>'.$product['description'].'</h3>
                </div>
            </div>';
            }
    ?>
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
