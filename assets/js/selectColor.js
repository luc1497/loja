var colors = document.querySelectorAll(".colorSelect");
colors.forEach(color => {
    color.addEventListener("click", function(){
        removeSelectedColor();
        if(!color.classList.contains("selected")){
            color.classList.add("selected");
        }
    })

})

function removeSelectedColor(){
    var colors = document.querySelectorAll(".colorSelect");
    colors.forEach(color => {
        if(color.classList.contains("selected")){
            color.classList.remove("selected");
        }
    })
}