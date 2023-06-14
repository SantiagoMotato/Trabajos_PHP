<?php

$edad = 59;
$genero = "Mujer";

if($genero = "Hombre"){
    if($edad >= 60){
        echo "Usted esta en edad de pesnsionarse. ";
    }else{
        echo "Usted no esta en edad de pensionarse. ";
    }
}elseif($genero = "Mujer"){
    if($edad >= 54){
        echo "Usted esta en edad de pesnsionarse. ";
    }else{
        echo "Usted no esta en edad de pensionarse. ";
    }
}

?>