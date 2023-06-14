<?php

$word = "AMOR";
$word = strtolower(str_replace(' ','',$word));

if($word == strrev($word)){
    echo "La palabra $word es un palindromo.";
}else{
    echo "La palabra $word no es un palindromo.";
}

?>