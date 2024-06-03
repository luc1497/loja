function getProduct(productId){
    var data = {
        "query": `SELECT * FROM products WHERE id='${productId}' ORDER BY id`
    }

    fetch("../scripts/getProducts.php", {method:"POST", headers: {'Content-type':'application/json'}, body: JSON.stringify(data)})
        .then(function(response){
            return response.json();
        })

        .then(function(products){
            var product = products[0];
            var productTitle = document.getElementById("productTitle");
            var productSubTitle = document.getElementById("productSubTitle");
            var productPrice = document.getElementById("productPrice");

            productTitle.innerText = product.titulo.toUpperCase();
            productSubTitle.innerText = product.titulo.toUpperCase();
            productPrice.innerText = product.valor;
        })

}

