<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Project_21</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="product_list">
    <?php
    $products=[];
    $productsPerPage = 4; // Số sản phẩm hiển thị mỗi trang
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
   for($i=1;$i<=30;$i++){
        $product=[
            "id"=>$i,
            "name"=>"T-Shirt",
            "price"=>$i+2,
            "description"=>"A comfortable and stylish T-Shirt."
        ];
        $products[]=$product;
    }
    $totalProducts = count($products);
    $totalPages = ceil($totalProducts / $productsPerPage);
    $startIndex = ($currentPage - 1) * $productsPerPage;
    $currentPageItems = array_slice($products, $startIndex, $productsPerPage);
    ?>
    <?php
    foreach ($currentPageItems as $product){
        echo'
            <div class="product">
                <img src="img/pd-content-1673850013-8463.jpg" class="card-img-top" alt="anh chiec ao">
                <div class="card_body">
                    <h4>'.$product['name'].'</h4>
                    <h5>'.$product['price'].'</h5>
                    <h6>'.$product['description'].'</h6>
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

