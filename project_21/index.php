<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $products = [
        ["id" => 1,"name" => "T-Shirt","price" => 15.99,"description" => "A comfortable and stylish T-Shirt.", "image" => "https://img.alicdn.com/i4/2468591210/O1CN0128tUyb1KoDpTPHTlN_!!2468591210.jpg_400x400.jpg_.webp"],
        ["id" => 2,"name" => "Jean","price" => 23,"description" => "A comfortable and stylish Jean."],
        ["id" => 3,"name" => "Sweater","price" => 19.99,"description" => "A comfortable and stylish Sweater."],
        ["id" => 5,"name" => "Hat","price" => 9.99,"description" => "A fashionable and trendy hat."],
        ["id" => 6,"name" => "Shoes","price" => 49.99,"description" => "A pair of stylish shoes."],
        ["id" => 7,"name" => "Watch","price" => 99.99,"description" => "A classy and elegant watch."],
        ["id" => 8,"name" => "Bag","price" => 39.99,"description" => "A trendy and spacious bag."],
        ["id" => 9,"name" => "Sunglasses","price" => 29.99,"description" => "A cool and stylish pair of sunglasses."],
        ["id" => 10,"name" => "Jacket","price" => 59.99,"description" => "A warm and fashionable jacket."],
        ["id" => 11,"name" => "Dress","price" => 39.99,"description" => "A beautiful and elegant dress."],
        ["id" => 12,"name" => "Skirt","price" => 29.99,"description" => "A trendy and stylish skirt."],
        ["id" => 13,"name" => "Sweatshirt","price" => 34.99,"description" => "A cozy and comfortable sweatshirt."],
        ["id" => 14,"name" => "Sneakers","price" => 49.99,"description" => "A pair of trendy sneakers."],
        ["id" => 15,"name" => "Scarf","price" => 14.99,"description" => "A warm and fashionable scarf."],
        ["id" => 16,"name" => "Gloves","price" => 9.99,"description" => "A pair of stylish gloves."],
        ["id" => 17,"name" => "Belt","price" => 19.99,"description" => "A fashionable and trendy belt."],
        ["id" => 18,"name" => "Socks","price" => 4.99,"description" => "A comfortable and stylish pair of socks."],
        ["id" => 19,"name" => "Purse","price" => 29.99,"description" => "A trendy and fashionable purse."],
        ["id" => 20,"name" => "Necklace","price" => 24.99,"description" => "A beautiful and elegant necklace."],
        ["id" => 21,"name" => "Bracelet","price" => 19.99,"description" => "A stylish and trendy bracelet."],
        ["id" => 22,"name" => "Earrings","price" => 14.99,"description" => "A pair of elegant earrings."],
        ["id" => 23,"name" => "Ring","price" => 9.99,"description" => "A fashionable and trendy ring."],
        ["id" => 24,"name" => "Wallet","price" => 34.99,"description" => "A stylish and functional wallet."],
        ["id" => 25,"name" => "Headphones","price" => 49.99,"description" => "A high-quality pair of headphones."],
        ["id" => 26,"name" => "Backpack","price" => 39.99,"description" => "A spacious and durable backpack."],
        ["id" => 27,"name" => "Glasses","price" => 19.99,"description" => "A trendy and stylish pair of glasses."]
    ];
    // so san pham tren moi trang
    $itemsPerPage = 10
    // truy cap so trang hien tai
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    // tinh tong so trang
    $totalPages = ceil(count($products) / $itemsPerPage);
    // tinh chi so bat dau cua san pham tren trang hien tai
    $startIndex = ($currentPage - 1) * $itemsPerPage;
    // lay ra cac san pham tren trang hien tai
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
    echo '<div class="product-list">';
    foreach ($currentPageItems as $item) {
        echo '<div class="product-item">';
        echo '<h2>' . $item['name'] . '</h2>';
        echo '<p>' . $item['price'] . '</p>';
        echo '<p>' . $item['description'] . '</p>';
        echo '</div>';
    }
   ?>
    
        
    </div>
</body>
</html>