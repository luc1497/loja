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
                <div class="productContainer">
                    <div class="productImgContainer">
                        <img class="productImg" src="assets/images/products/${product.id}/foto.jpg" alt="img">
                    </div>
                    <span>${product.titulo.toUpperCase()}</span>
                    <span>R$ ${product.valor}</span>
                    <span>RATING</span>
                </div>
                `
            });
            var texto = "teste";
            texto.toUpperCase;
        })

}

getProducts();