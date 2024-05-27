function showProduct(){
    fetch("../products/product.php")
        .then(function(data){
            return data.json();

        })

        .then(function(product){
            console.log(product);
        })

}

showProduct();