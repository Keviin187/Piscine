<?php

$num = 35;

function six($num){
    if ($num > 25) {
        return "positif";
    } elseif ($num < 25) {
        return "négatif";
    } else { 
        return "nul";
    }
}
echo six($num);



?>