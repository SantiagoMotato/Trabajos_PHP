<?php

$numero = intval(readline("Ingrese un número: "));

$esPrimo = true;

if ($numero <= 1) {
    $esPrimo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}

if ($esPrimo) {
    echo "El número $numero es primo.";
} else {
    echo "El numero $numero no es primo.";
}

?>