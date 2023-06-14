<?php

$palabra = readline("Ingrese una palabra: (Por ejemplo, reconocer)");

$palabra = strtolower(str_replace(' ', '', $palabra));

if ($palabra == strrev($palabra)) {
    echo "La palabra \"$palabra\" es un palíndromo.";
} else {
    echo "La palabra \"$palabra\" no es un palíndromo.";
}

?>