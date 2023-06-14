<?php

$texto = readline("Ingrese un texto ");

if($texto>10){
    echo $texto." es mayor que "."10"."\n";
}elseif ($texto < 10) {
    echo $texto." es menor que "."10"."\n";
} else {
    echo $texto." es igual que "."10"."\n";
}

?>


