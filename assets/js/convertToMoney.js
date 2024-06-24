function convertToMoney(value){
    if(value.indexOf('.') != -1){
        var currentValue = value.toString();
        var index = currentValue.indexOf('.');
        var cents = currentValue.slice(index + 1);
        if(cents.length  == 1){
            cents = cents + '0';
        }

        
        var number = currentValue.slice(0, index) + ',' + cents;

    }





    if(value.indexOf('.') == -1){
        var currentValue = value.toString();
        
        var number = currentValue + ',00';
    }

   
    return number;
}

