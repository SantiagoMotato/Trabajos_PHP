<?php

/* $numeros = 4, 18, 3, 22, 1;

function ordenarArray(){
    $arregloNumeros[];
} */

function bubbleSort($arr) {
    $n = count($arr);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Compara elementos adyacentes
            if ($arr[$j] > $arr[$j + 1]) {
                // Intercambia los elementos si están en el orden incorrecto
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    
    return $arr;
}

// Ejemplo de uso
$nums = array(5, 2, 8, 12, 1);
echo "Arreglo original: " . implode(", ", $nums) . "<br>";
$nums = bubbleSort($nums);
echo "Arreglo ordenado: " . implode(", ", $nums) . "\n";




/* 

function bubbleSort($arr) {
    $n = count($arr); // Obtiene la longitud del arreglo
    
    for ($i = 0; $i < $n - 1; $i++) {
        // El bucle exterior itera desde el primer elemento hasta el penúltimo
        // La variable $i representa el número de pasadas que se han realizado
        
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // El bucle interior itera desde el primer elemento hasta el último elemento no ordenado
            // Se resta $i para evitar comparar los elementos ya ordenados en las pasadas anteriores
            
            // Compara elementos adyacentes
            if ($arr[$j] > $arr[$j + 1]) {
                // Si el elemento actual es mayor que el siguiente, se realiza un intercambio
                // Utilizamos una variable temporal ($temp) para realizar el intercambio
                
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    
    return $arr; // Devuelve el arreglo ordenado
}

// Ejemplo de uso
$nums = array(5, 2, 8, 12, 1);

echo "Orden ingresado: " . implode(", ", $nums) . "\n";

$nums = bubbleSort($nums);

echo "Orden actualizado: " . implode(", ", $nums) . "\n";
 */

?>