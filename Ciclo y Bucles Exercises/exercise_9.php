<?php

$digitedNumber = intval(readline("Ingrese el numero con el que desee hacer una operacion Fibonacci:"));

$number1 = 0;
$number2 = 1;

/* Aqui creo un ciclo for, donde $numberDigited va a ser la cantidad de veces en el que el ciclo se va a repetir. Seguido de ello, viene en accion el condicional:

$sum = $number1 + $number2;   
$number1 = $number2;
$number2 = $sum;

las variables $number1/2 se le asigna ese valor correspondido de dicha forma porque se va a realizar una suma en donde el numero ingresado es sumado con cero($numero1=0), y ese resultado va a ser sumado con el siguiente numera que aumentara a cuasa de la variable " $i++ ", y asi sucesivamente hasta el numero de veces que usuario desee ingresando un numero en el sistema. 

Fibonacci es la suma de un numero, mas el siguiente que sigue($numero2) despues de este en el sentido de la recta numerica en el eje x de izquiera a derecha apartir del cero hasta el numero que ingrese el usuario.
*/

for($i = 1; $i <= $digitedNumber; $i++){
    $sum = $number1 + $number2;
    $number1 = $number2;
    $number2 = $sum;

    //echo $sum . " ";
    echo $number1 . " ";
}

?>