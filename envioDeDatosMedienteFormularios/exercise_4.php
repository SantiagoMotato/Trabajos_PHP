<?php

$numero = 1234;
$sumaNumeros = sumarDigitos($numero);

function sumarDigitos($numero) {
    $suma = 0;
    $numero = abs($numero);
    
    // Convertir el número en una cadena de caracteres y luego en un array de dígitos
    $digitos = str_split($numero);
    
    foreach ($digitos as $digito) {
        $suma += $digito;
    }
    
    return $suma;
}

echo "La suma de los numeros $numero es: $sumaNumeros";

?>