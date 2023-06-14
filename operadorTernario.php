<?php

// Operacion ternari0: If de una sola linea

//Condicion ? respuesta verdad:despuesta falsa}

// Forma 1 de  hacer la condicion (9>7) ? $total=10*7 : $total=10*5;

//Forma 2 de hacer la condicion para evitar la saturacion de codigo
/*  $total = (9>7) ? 10*7 : 10*5;

echo $total;

if(9>7){
    $total = 10*7;
    echo $total;
}else{
    $total=
} */


/* $cantidadCamisas = 3;
$precioCamisa=25000;
$total = ($cantidadCamisas > 3) ? $cantidadCamisas * 
$precioCamisa * 0.8 : $cantidadCamisas * $precioCamisa * 0.9;

echo $total; */

/* 
$edad = readline("Ingrese la edad ");
var_dump($edad);
$genero = readline("Ingrese genero ");
// H Hombre M Mujer
if($genero=="Hombre"){
    if($edad>=60)
    echo "Al ser hombre y tener $edad se puede pensionar ";
    else{
        echo "No cumple con el requisito de edad ";
    }
}elseif($genero=="Mujer"){
        if($edad>=54)
        echo  "Al ser Mujer y tener $edad se puede pensionar ";
    }else{
        echo "No cumple con el requisito de edad ";
} */

/* $dia = readline("ingrese un numero del 1 al 7 ");

switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
    echo "Alerta!!!";
    break;
} */

/* $color = readline("Ingrese uno de los tres colores: Rojo, Amarillo, Verde ");

$action = match ($color) {
    'Rojo' => 'Detenerse',
    'Amarillo' => 'Precaucion',
    'Verde' => 'Avanzar',
    default => 'Color desconocido'
};

echo $action */

/* $a = intval( readline("Ingrese uno de los sigui. numeros: 10, 9, 7 "));
var_dump($a);
$x=10;
$y=9;
$z=7;

$resultado = match($a) {
    $x => 'Valor igual a X',
    $y => 'Valor igual a Y',
    $z => 'Valor igual a Z',
    default => 'No coincide con ninguna variable. '
};

echo $resultado; */

$edad = intval( readline("Ingrese su edad "));
var_dump($edad);

$resultado = match(true) {
    $edad >= 60 => "Eres de la tercera edad. ",
    $edad >= 30 => "Eres adulto. ",
    $edad >= 10 => "Eres un niño. ",

};

echo $resultado;

?>