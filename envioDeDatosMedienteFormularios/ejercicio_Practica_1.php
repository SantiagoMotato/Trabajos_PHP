<?php

function calcularDescuento($precio, $descuento){
    $resultado = $precio * $descuento;
    $valorFinal = $precio - $resultado;
    return $valorFinal;
}
echo calcularDescuento(2000, 0.1); 


//Codigo suministrado por el instructor.

/* function calcularDescuento($precioOriginal, $porcentajeDescuento){
    $porcentaje = $porcentajeDescuento / 100;
    $descuento = $precioOriginal - ($precioOriginal * $porcentaje);
    return $descuento;
};

$vocero = intval(readline("Ingrese el valor original del producto: \n"));
$descuento = intval(readline("Ingrese el valor del descuento: \n"));
echo "El valor a pagar es:".$calcularDescuento($vocero,$descuento); */

?>