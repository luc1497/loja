<?php
session_start();
include("dbConnect.php");

$json = file_get_contents('php://input');
$data = json_decode($json, true);
// $data['query'] = "SELECT * FROM products ORDER BY id";

$query = $_SESSION["lastQuery"];
$response = $connect->query($query);
$i=0;

while ($product = $response->fetch_assoc()){
    $id = $product['id'];    
    if($product['img'] == 1){
        $imgQuey = "SELECT * FROM imagens WHERE bem_id = '$id' ORDER BY id";
        $imgResponse = $connect->query($imgQuey);
        $image = $imgResponse->fetch_assoc();

    }


    $product["image"] = $image;
    
    $products[$i] = $product;
    $i++;
}

echo json_encode($products);

?>