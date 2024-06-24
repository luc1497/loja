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
    if($product['img'] == 1){
        $imgQuery = "SELECT * FROM imagens WHERE bem_id = '$id' ORDER BY id";
        $imgResponse = $connect->query($imgQuery);
        $cont = 0;
        while($image = $imgResponse->fetch_assoc()){
            $images[$cont] = $image;
            $cont++;
        };

        $product["images"] = $images;
    }


    
    $products[$i] = $product;
    $i++;
}

echo json_encode($products);

?>