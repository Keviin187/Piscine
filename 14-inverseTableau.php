


<?php 

$tab2 = [1,2,3,4,5,6,7,8,9,10];
function tab($tab2){
    foreach($tab2 as $values){
        echo "$values \n";
    }
    foreach(array_reverse($tab2) as $values){
        echo "$values \n";
    }

}

echo tab($tab2);
?>