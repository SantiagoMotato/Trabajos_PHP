<?php

$numero = 1234;
$sumaNumeros = sumarDigitos($numero);

function sumarDigitos($numero) {
    $suma = 0;
    $numero = abs($numero);
    
    $digitos = str_split($numero);
    
    foreach ($digitos as $digito) {
        $suma += $digito;
    }
    
    return $suma;
}

echo "La suma de los numeros $numero es: $sumaNumeros";

?>