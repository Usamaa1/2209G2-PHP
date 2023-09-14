<?php 

function msg(){
    echo "Hello function <br>";
}

msg();
function add($num1, $num2){
    echo $num1 + $num2 . "<br>";
}


add(45,54);

function sub(int $num1, int $num2){
    echo $num1 - $num2 . "<br>";
}


// sub("d","g");
sub(3,6);




?>