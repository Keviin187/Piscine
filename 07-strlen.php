<?php 

$str = "Golden state warriors";

function longueur($str){
    if(strlen($str > 10)){
    return "Longue \n";
}
    else{
        return "Courte \n";
    }
}
echo longueur($str);


?>