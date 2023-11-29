<?php

function siBball($player){
    if(empty($player)){
        return "Vide \n";
    }
    else{
        return "NON VIDE \n";
    }
}
echo siBball(5);
?>