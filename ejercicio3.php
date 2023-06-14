<?php
$numero = readline("Ingresa un número del 1 al 7: "); // Solicitar al usuario que ingrese un número

$diasSemana = array(
    1 => "Lunes",
    2 => "Martes",
    3 => "Miércoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sábado",
    7 => "Domingo"
);

if (array_key_exists($numero, $diasSemana)) {
    echo $diasSemana[$numero]; // Imprimir el día de la semana correspondiente al número ingresado
} else {
    echo "Número inválido"; // Imprimir mensaje si el número no está en el rango válido
}
?>
