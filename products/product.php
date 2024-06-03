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
    $_SESSION['productPrice'] = $product['valor'];
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
            
            <h1 id="productTitle"></h1>
            <div class="subInfoDisplay">
                <div class="line row">
                    <div class="line full-height justify">
                        <img style="width: 100px; border-radius:10px;" src="../assets/images/products/1/foto.jpg" alt="img">
                    </div>
                    <div class="line center-row full-width gap-15 ">
                        <!-- <span class="qtd">(QUANTIDADE: 1)</span> -->
                        <span id="productSubTitle" class="title"></span>
                        <div class="line row gap-15">
                            <span id="productPrice"><?php echo $_SESSION['productPrice']; ?></span>
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
                <div class="line row">
                    <span class="size">QUANTIDADE</span>
                </div>
                <div class="line row">
                    <div class="container">
                        <div class="line full-width full-height justify align increment">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                            </svg>
                        </div>
                        <div class="line full-width full-height"><input type="text" value="1"></div>
                        <div class="line full-width full-height justify align increment">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                            </svg>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="button black">
                <span>ADICIONAR AO CARRINHO</span>
            </div>
            <div class="button white">
                <span>COMPRAR AGORA</span>
            </div>
            <div class="productDescription">
            <p>
    <strong>Camisa de Alta Qualidade</strong><br><br>

    <strong>Descrição do Produto</strong><br><br>
    Esta <strong>camisa premium</strong> é feita com um <strong>tecido de altíssima qualidade</strong>, garantindo conforto e durabilidade excepcionais. Projetada para oferecer um ajuste perfeito e estilo sofisticado, esta camisa é uma adição indispensável ao seu guarda-roupa.<br><br>

    <strong>Motivos para Comprar</strong><br><br>

    <strong>1. Conforto Incomparável</strong><br>
    O tecido utilizado nesta camisa é suave ao toque e proporciona um conforto incomparável durante todo o dia. Ideal tanto para ambientes formais quanto casuais.<br><br>

    <strong>2. Durabilidade</strong><br>
    Feita com materiais de alta qualidade, esta camisa resiste ao desgaste e mantém sua aparência nova mesmo após várias lavagens.<br><br>

    <strong>3. Estilo Elegante</strong><br>
    Com um design clássico e cores elegantes, esta camisa complementa qualquer visual, desde o mais casual até o mais formal.<br><br>

    <strong>4. Fácil de Manter</strong><br>
    O tecido especial desta camisa é fácil de cuidar, necessitando de pouca manutenção e mantendo-se sempre impecável.<br><br>

    <strong>5. Versatilidade</strong><br>
    Perfeita para qualquer ocasião, seja para uma reunião de negócios, um evento social ou um encontro casual com amigos.<br><br>

    <strong>Conclusão</strong><br><br>
    Adquira já a sua <strong>camisa de alta qualidade</strong> e experimente o melhor em conforto, durabilidade e estilo. Transforme seu guarda-roupa com uma peça versátil e indispensável!
</p>
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
<script src="../assets/js/selectSize.js"></script>
<script src="../assets/js/selectColor.js"></script>
<script src="../assets/js/getProduct.js"></script>
<script>
    getProduct(<?php echo $_SESSION['productId']?>);
</script>
</html>