function getProducts(){
    
    var data = {
        "query": "SELECT * FROM products ORDER BY id"
    }

    fetch("scripts/getProducts.php", {method:"POST", headers: {'Content-type':'application/json'}, body: JSON.stringify(data)})
        .then(function(response){
            return response.json();
        })

        .then(function(products){
            console.log(products)
            showcase = document.getElementById("showcase");
            showcase.innerHTML = "";
            
            
            products.forEach(product => {
              
                       
                showcase.innerHTML +=
                `
                <form action="products/" method="GET" onclick="formSubmit(${product.id});" class="productForm" id="productForm${product.id}">
                <div class="productContainer">
                    <div class="productImgContainer">
                    ${product.img == true ? `<img class="productImg" src="${product.image.path}" alt="img">` : `<img class="productImg" src="https://hardteste-sheetonline.shop/uploads/products_images/noImage.png" alt="img">`}
                    </div>
                    <span>${product.titulo.toUpperCase()}</span>
                    <span>R$ ${convertToMoney(product.valor)}</span>
                    <span>RATING</span>
                    <input type="hidden" name="productId" value="${product.id}"></input>
                </div>
                </form>
                `
                
                
            });
            var texto = "teste";
            texto.toUpperCase;
        })

}

getProducts();