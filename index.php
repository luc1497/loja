<?php
session_start();
if(isset($_SESSION['productId'])){
    unset($_SESSION['productId']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="icon" href="assets/images/logo.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
    
        <div class="filterContainer">
            <div class="filterTypeContainer">
                <div class="filterTitle">
                    <div class="symble"></div>
                    <span>TIPO</span>
                </div>
                <div class="filterOption">
                    <input type="checkbox">
                    <span>CAMISAS</span>
                </div>
                <div class="filterOption">
                    <input type="checkbox">
                    <span>REGATAS</span>
                </div>
                <div class="filterOption">
                    <input type="checkbox">
                    <span>CASACOS</span>
                </div>
            </div>
            <div class="filterTypeContainer">
                <div class="filterTitle">
                    <div class="symble"></div>
                    <span>TAMANHO</span>
                </div>
                <div class="filterOption">
                    <input type="checkbox">
                    <span>P</span>
                </div>
                <div class="filterOption">
                    <input type="checkbox">
                    <span>M</span>
                </div>
                <div class="filterOption">
                    <input type="checkbox">
                    <span>G</span>
                </div>
                <div class="filterOption">
                    <input type="checkbox">
                    <span>X</span>
                </div>
                <div class="filterOption">
                    <input type="checkbox">
                    <span>XL</span>
                </div>
                <div class="filterOption">
                    <input type="checkbox">
                    <span>XXL</span>
                </div>
            </div>
        </div>
        <div id="showcase" class="showcase">
            <!-- <div class="productContainer">
                <div class="productImgContainer">
                    <img class="productImg" src="assets/images/products/1/foto.jpg" alt="img">
                </div>
                <span>TÍTULO DO PRODUTO</span>
                <span>R$ 99,90</span>
                <span>RATING</span>
            </div>
            <div class="productContainer">
                <div class="productImgContainer">
                    <img class="productImg" src="assets/images/products/2/foto.jpg" alt="img">
                </div>
                <span>TÍTULO DO PRODUTO</span>
                <span>R$ 99,90</span>
                <span>RATING</span>
            </div> -->
                  

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
<script src="assets/js/getProducts.js"></script>
<script src="assets/js/formSubmit.js"></script>
<script src="assets/js/convertToMoney.js"></script>
</html>