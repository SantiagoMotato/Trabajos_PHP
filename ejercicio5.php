<?php
$numero1 = readline("Ingresa el primer número: "); // Solicitar al usuario que ingrese el primer número
$numero2 = readline("Ingresa el segundo número: "); // Solicitar al usuario que ingrese el segundo número

$numeros = array($numero1, $numero2);

if ($numeros[0] > 10 && $numeros[1] > 10) {
    echo "Ambos números son mayores que 10"; // Imprimir mensaje si ambos números son mayores que 10
} elseif ($numeros[0] > 10 || $numeros[1] > 10) {
    echo "Solo uno de los números es mayor que 10"; // Imprimir mensaje si solo uno de los números es mayor que 10
} else {
    echo "Ninguno de los números es mayor que 10"; // Imprimir mensaje si ninguno de los números es mayor que 10
}
?>
