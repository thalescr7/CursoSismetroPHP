<?php
   $s = 7;
   $e = 7;

    $soma = $s + $e;

    echo("A soma entre $s e $e é: $soma<br>");

    $s = 7;
    $e = 7;
 
     $subtracao = $s - $e;
     
     echo("A subtracao entre $s e $e é: $subtracao<br>");

     $s = 7;
    $e = 7;
 
     $divisao = $s / $e;
 
     echo("A divisao entre $s e $e é: $divisao<br>");
     
     $s = 7;
    $e = 7;
 
     $multiplicacao = $s * $e;
 
     echo("A multiplicacao entre $s e $e é: $multiplicacao <br>");

     if($soma < 10){
      echo "soma menor que 10 <br/>";
     }else{
        echo "soma maior ou igual a 10 <br/>";
     }

     if($subtracao > 20){
        echo "subtrção maior que 20 <br/>";
     }elseif($subtracao == 20){
        echo "subtração menos que 20 <br/>";
     }else{
        echo "subtrcao menor que 20 <br/>";
     }

     if($divisao > 5){
        echo "divisao maior que 5 <br/>";
     }elseif($divisao == 5){
        echo "divisao menos que 5 <br/>";
     }else{
        echo "divisao menor que 5 <br/>";
     }

     if($multiplicacao > 30){
        echo "multiplicacao maior que 30 <br/>";
     }elseif($multiplicacao == 30){
        echo "multiplicacao menos que 30 <br/>";
     }else{
        echo "multiplicacao menor que 30 <br/>";
     }


     switch($v8){
        case 10:
            echo "ola";
            break;
        case 9:
            echo "certo";
        case 8:
            break;
            default:
            echo "bao";

     }
?>