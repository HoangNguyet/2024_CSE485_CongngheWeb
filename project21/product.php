<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet", href="assets/style.css">
    <title>Product</title>
</head>
<body>
<div class="container">
<?php

$product = [
    [
        'id' => 1,
        'image' => 'assets\img\t-shirt.jpg',
        'name' => 'T-shirt',
        'price'=>15.8,
        'description'=>'A comportable and stylish T-shirt'
    ],
    [
        'id'=>2,
        'image' => 'assets\img\jeans.jpg',
        'name'=>'Jeans',
        'price' => 20.9,
        'description'=>'A jeans from America'
    ],
    [
        'id'=> 3,
        'image' => 'assets\img\hat.jpg',
        'name' => 'Hat',
        'price' => 5.9,
        'description' => 'A hat made in VietNam'
    ],
    [
        'id' => 4,
        'image' => 'assets\img\gloves.jpg',
        'name' => 'Gloves',
        'price' => 31.1,
        'description' => 'A gloves made in VietNam'
    ],
    [
        'id'=> 3,
        'image' => 'assets\img\hat.jpg',
        'name' => 'Hat',
        'price' => 5.9,
        'description' => 'A hat made in VietNam'
    ],
    [
        'id' => 1,
        'image' => 'assets\img\t-shirt.jpg',
        'name' => 'T-shirt',
        'price'=>15.8,
        'description'=>'A comportable and stylish T-shirt'
    ],
    [
        'id'=> 3,
        'image' => 'assets\img\hat.jpg',
        'name' => 'Hat',
        'price' => 5.9,
        'description' => 'A hat made in VietNam'
    ],
    [
        'id' => 1,
        'image' => 'assets\img\t-shirt.jpg',
        'name' => 'T-shirt',
        'price'=>15.8,
        'description'=>'A comportable and stylish T-shirt'
    ],
];
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPage = ceil(count($product) / $itemsPerPage);
$currentPageItems = array_slice($product, ($currentPage-1) * $itemsPerPage, $itemsPerPage);
?>

<div class="product-container">
    <?php foreach ($currentPageItems as $pro): ?>
    <div class="product">
        <?php if (!empty($pro['image'])): ?>
            <img src="<?php echo $pro['image']; ?>"
        <?php endif; ?> </br>
        <p>Name: <?php echo $pro['name']; ?></p>
        <p>Price: <?php echo $pro['price']; ?></p>
        <p>Description: <?php echo $pro['description']; ?></p>
    </div>
    <?php endforeach; ?>
</div>
<div class="pagination">
    <?php if($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>
    <?php for($i = 1; $i <= $totalPage; $i++): ?>
        <?php if($i == $currentPage): ?>
            <span class="active"> <?php echo  $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><p id="page"><?php echo $i; ?> </p></a>
        <?php endif ?>
    <?php endfor; ?>
    <?php if($currentPage < $totalPage): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
</div>
</div>
</body>
</html>