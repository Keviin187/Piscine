<?php

$fruits = array("Pomme", "Noix de Coco", "Fraise", "Cerise", "Quénette");

echo $fruits[0] . "\n";
echo $fruits[1] . "\n";
echo $fruits[2] . "\n";
echo $fruits[3] . "\n";
echo $fruits[4] . "\n"; 







$fruits = ["Pomme", "Noix de Coco", "Fraise", "Cerise", "Quénette"];

function fts($fruits){
foreach($fruits as $values){
    echo "$values \n";
}
}
echo fts($fruits);

?>