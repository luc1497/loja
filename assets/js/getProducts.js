function getProducts(){
    
    // var data = {
    //     "query": "SELECT * FROM products WHERE deletado=0 AND status!='Rascunho' ORDER BY id"
    // }
    getFilterValue();
    fetch("scripts/getProducts.php")
        .then(function(response){
            return response.json();
        })

        .then(function(products){
            console.log(products)
            showcase = document.getElementById("showcase");
            showcase.innerHTML = "";
            
            var i=0;
            let tipos =[];
            products.forEach(product => {
                if(!tipos.includes(product.tipo)){
                    tipos[i] = product.tipo;

                }

                i++;
            })

            var filterTypeContainer = document.getElementById("filterTypeContainer");
            filterTypeContainer.innerHTML =
            `<div class="filterTitle">
                <div class="symble"></div>
                <span>TIPO</span>
            </div>
            `;

            tipos.forEach(tipo => {
                filterTypeContainer.innerHTML +=
                `
                <div class="typeFilterOption">
                    <input class="checkBoxTypeFilterOption" type="checkbox" value="${tipo}">
                    <span>${tipo}</span>
                </div>
                `;
            })




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

function getFilterValue(){

    var filters = document.querySelectorAll(".checkBoxTypeFilterOption");
    console.log(filters);
    var final = " AND (deletado=0 AND status!='Rascunho') ORDER BY id";
    var query = "SELECT * FROM products WHERE ";

    var cont = 0;
    // separar o checkados

    var checkedFilters = [];
    var checkCont=0;
    filters.forEach(filter =>{
        if(filter.checked == true){
            checkedFilters[checkCont] = filter;
            checkCont++;
        }

    })

    console.log(checkedFilters);

    if(checkedFilters.length != 0){
        var cont = checkedFilters.length;

        for (let i = 0; i < cont; i++) {
            if(i == 0){
                query = query + "(";
            }

            query = query + `tipo='${checkedFilters[i].value}'`;

            if(i < cont-1){
                query = query + " OR ";
            }
                       
        }

        query = query + ")";
    
        query = query + final;
    
    
        console.log(query);


    }else{
        query = "SELECT * FROM products WHERE deletado=0 AND status!='Rascunho' ORDER BY id";
    }
    


    var data = {
        "query" : query
    }

    fetch("scripts/setLastQuery.php", {method:"POST", headers: {'Content-type':'application/json'}, body: JSON.stringify(data)})
        .then(function(response){
            return response.json();
        })

        .then(function(response){
            console.log(response);
        })

    
}