<?php
 
 function fibonacci($a){
    $b = array();
    $b[0] = 1;
    $b[1] = 1;

    return $b[$a-1];
}

$a = 0;
$b = 1;

for ($i = 0; $i <= 0; $i++){

    $c = $a + $b;

    echo $c . " ";

    $a = $b;
    $b = $c;
}



?>