<?php

function numero_primo($posicao){
     $primos = array(2); $n= 3; while(count($primos)< $posicao)
{ $e_primo = true; foreach($primos as $primo)
{ if($n%$primo == 0){ $e_primo = false; } } if($e_primo)
{ $primo[] = $n; } $n++ } return $primos[$posicao - 1]; } 

?>
