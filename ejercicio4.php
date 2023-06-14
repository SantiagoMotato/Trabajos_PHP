<?php
$edad = readline("Ingresa tu edad: "); // Solicitar al usuario que ingrese su edad

if ($edad >= 18) {
    $licencia = readline("¿Tienes licencia de conducir? (sí/no): "); // Preguntar si tiene licencia de conducir
    $respuestasValidas = array("sí", "no");

    if (in_array($licencia, $respuestasValidas)) {
        if ($licencia == "sí") {
            echo "Puedes conducir"; // Imprimir mensaje si tiene licencia de conducir
        } else {
            echo "Debes obtener una licencia de conducir primero"; // Imprimir mensaje si no tiene licencia de conducir
        }
    } else {
        echo "Respuesta inválida. Por favor, ingresa 'sí' o 'no'."; // Imprimir mensaje si la respuesta no es válida
    }
} else {
    echo "No puedes conducir"; // Imprimir mensaje si es menor de 18 años
}
?>
