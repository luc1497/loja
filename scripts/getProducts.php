<?php
include("dbConnect.php");

$json = file_get_contents('php://input');
$data = json_decode($json, true);
// $data['query'] = "SELECT * FROM products ORDER BY id";

$query = $data['query'];
$response = $connect->query($query);
$i=0;

while ($product = $response->fetch_assoc()){
    $id = $product['id'];
    $product['img'] = true;
    
    
    $id = $product['id'];
    $filepath = "assets/uploads/products_images/";
        
    $products[$i] = $product;
    $i++;
}

echo json_encode($products);

?>