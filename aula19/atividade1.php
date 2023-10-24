<?php

$lista = array(
    array("banco de dados", 7.1),
    array("analise", 8.3),
    array("ciencia da computação", 6.2),
    array("front end", 6.4),
    array("mobile", 6.7),
    array("portugues", 10),
    array("matematica", 6.5),
    array("ingles", 7.5),
    array("historia", 10),
    array("geografia", 8.5),
    array("quimica", 10),
    array("sociologia", 7.2),
    array("projeto de vida", 8.7),
    array("financeira", 7.5),
    array("biologia", 7.6),
);
echo "<br/><br/><br/><br/>";
foreach($lista as $materia){
    echo $materia[0]." - ".$materia[1]."<br/><br/>";
}


?>