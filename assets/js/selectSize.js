var boxs = document.querySelectorAll(".sizeBox");
removeSelected();
boxs.forEach(box => {
    box.addEventListener("click", function(){
        removeSelected();
        if(!box.classList.contains("selected")){
            box.classList.add("selected");
        }
    })

})

function removeSelected(){
    var boxs = document.querySelectorAll(".sizeBox");
    boxs.forEach(box => {
        if(box.classList.contains("selected")){
            box.classList.remove("selected");
        }
    })
}