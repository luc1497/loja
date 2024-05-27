<?php
session_start();
include("../scripts/dbConnect.php");
if(isset($_GET['productId'])){
    $productId = $_GET['productId'];
    $_SESSION['productId'] = $productId;
    $query = "SELECT * FROM products WHERE id='$productId'";
    $return = $connect->query($query);
    $product = $return->fetch_assoc();
    $_SESSION['productTitulo'] = $product['titulo'];
    // echo json_encode($product);
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="icon" href="../assets/images/logo.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/product.css">
    <title>BELTIALLI</title>
</head>
<body>
    <nav>
        <span style="margin-right: 20px;letter-spacing: 1px;">BELTIALLI</span>
        <span>DEPARTAMENTOS</span>
        <span>OFERTAS</span>
        <span>LANÇAMENTOS</span>
        <span>SOBRE NÓS</span>
        <div style="width: 100%;"></div>
        <span>LOGIN</span>
        <span>CARRINHO</span>
    </nav>
    <div class="pageBackground">
        <div class="productImgsDisplay">
            <div class="productImgContainer">
                <img src="../assets/images/products/1/foto.jpg" alt="img">
            </div>
            <div class="productImgContainer">
                <img src="../assets/images/products/1/foto.jpg" alt="img">
            </div>
            <div class="productImgContainer">
                <img src="../assets/images/products/1/foto.jpg" alt="img">
            </div>
            <div class="productImgContainer">
                <img src="../assets/images/products/1/foto.jpg" alt="img">
            </div>
            <div class="productImgContainer">
                <img src="../assets/images/products/1/foto.jpg" alt="img">
          </div>
            <div class="productImgContainer">
                <img src="../assets/images/products/1/foto.jpg" alt="img">
          </div>
            
        </div>
        <div class="productInfoDisplay">
            
            <h1><?php echo strtoupper($_SESSION['productTitulo']) ?></h1>
            <div class="subInfoDisplay">
                <div class="line row">
                    <div class="line full-height justfy">
                        <img style="width: 100px; border-radius:10px;" src="../assets/images/products/1/foto.jpg" alt="img">
                    </div>
                    <div class="line center-row full-width gap-15 ">
                        <span class="qtd">(QUANTIDADE: 1)</span>
                        <span class="title"><?php echo strtoupper($_SESSION['productTitulo']); ?></span>
                        <div class="line row gap-15">
                            <span>R$ 138,00</span>
                            <span class="previousValue"><s>R$ 158,00</s></span>
                        </div>
                    </div>
                </div>
                <div class="line row">
                    <span class="color">COR: AZUL</span>
                </div>
                <div class="line row center-row">
                    <div class="colorSelect blue selected"></div>
                    <div class="colorSelect aqua"></div>
                    <div class="colorSelect red"></div>
                    <div class="colorSelect green"></div>
                    <div class="colorSelect yellow"></div>
                    <div class="colorSelect silver"></div>
                    <div class="colorSelect blueviolet"></div>
                    <div class="colorSelect darkslateblue"></div>
                </div>
                <div class="line row">
                    <span class="size">TAMANHO</span>
                </div>
                <div class="line row">
                    <div class="sizeBox selected"><span>PP</span></div>
                    <div class="sizeBox"><span>P</span></div>
                    <div class="sizeBox"><span>M</span></div>
                    <div class="sizeBox"><span>G</span></div>
                    <div class="sizeBox"><span>GG</span></div>
                    <div class="sizeBox"><span>XGG</span></div>
                    
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footerContainer">
            <span>&copy; Lucas Rawlison</span>
            <span>luc1497@gmail.com</span>
            <span>+55 (83) 9 8787-2668</span>
            <span>@lucasrawlison</span>
        </div>
    </footer>
    
</body>
</html>