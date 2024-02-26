<?php
for($i=0;$i<10;$i++){
    $product=[
        "id"=>$i,
        "name"=>"T-Shirt",
        "price"=>rand(1,100),
        "description"=>"A comfortable and stylish T-Shirt."
    ];
    $products[]=$product;
}
foreach ($products as $product){
    echo "ID: ". $product['id']. "<br>";
    echo "Name: ". $product['name']. "<br>";
    echo "Price: ".$product['price']. "<br>";
    echo "description".$product['description']. "<br>";
    echo"<br>";
}
$currentPage=isset($_GET['page'])?$_GET['page']:1;





?>