<?php

$nombre = readline("Ingresa tu nombre: "); // Solicitar al usuario que ingrese su nombre

$nombresValidos = array(
    "Juan" => "¡Hola Juan!"
);

if (array_key_exists($nombre, $nombresValidos)) {
    echo $nombresValidos[$nombre]; // Imprimir mensaje si el nombre es válido
} else {
    echo "Lo siento, no te conozco"; // Imprimir mensaje si el nombre no es válido
}
?>
