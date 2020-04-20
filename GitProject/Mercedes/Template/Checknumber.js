function controlvalidation(){
    var number = document.getElementById("tel").value;
    if( (number.substr(0, 1)=="+" && Number(number.slice(1)))||number=="" ){
        document.getElementById("comment").innerHTML="";
    }
    else{
        document.getElementById("comment").innerHTML="This number is incorrect !";
    }
}

setInterval( controlvalidation, 0.05 * 1000 );