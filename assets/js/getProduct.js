function getProduct(productId){
    var data = {
        "query": `SELECT * FROM products WHERE id='${productId}' ORDER BY id`
    }

    fetch("../scripts/getProduct.php", {method:"POST", headers: {'Content-type':'application/json'}, body: JSON.stringify(data)})
        .then(function(response){
            return response.json();
        })

        .then(function(products){
            console.log(products)
            var product = products[0];
            var productTitle = document.getElementById("productTitle");
            var productSubTitle = document.getElementById("productSubTitle");
            var productPrice = document.getElementById("productPrice");
            var previousValue = document.getElementById("previousValue");
            var productImgsDisplay = document.getElementById("productImgsDisplay");

            if(product.img == 1){
                product.images.forEach(image => {
                    productImgsDisplay.innerHTML += 
                    `
                    <div class="productImgContainer">
                        <img src="${image.path}" alt="${image.nome}">
                    </div>
                    `;
                    
                });
            }else{
                productImgsDisplay.innerHTML = 
                `
                <div class="productImgContainer">
                    <img src="https://hardteste-sheetonline.shop/uploads/products_images/noImage.png" alt="noImage">
                </div>
                <div class="productImgContainer">
                    <img src="https://hardteste-sheetonline.shop/uploads/products_images/noImage.png" alt="noImage">
                </div>
                <div class="productImgContainer">
                    <img src="https://hardteste-sheetonline.shop/uploads/products_images/noImage.png" alt="noImage">
                </div>
                <div class="productImgContainer">
                    <img src="https://hardteste-sheetonline.shop/uploads/products_images/noImage.png" alt="noImage">
                </div>
                <div class="productImgContainer">
                    <img src="https://hardteste-sheetonline.shop/uploads/products_images/noImage.png" alt="noImage">
                </div>
                <div class="productImgContainer">
                    <img src="https://hardteste-sheetonline.shop/uploads/products_images/noImage.png" alt="noImage">
                </div>
                `;

            }

            productTitle.innerText = product.titulo.toUpperCase();
            productSubTitle.innerText = product.titulo.toUpperCase();
            productPrice.innerText = `R$ ${convertToMoney(product.valor)}`;
            previousValue.innerHTML = `<s>R$ ${convertToMoney(product.valor_anterior)}</s>`;
        })

}

