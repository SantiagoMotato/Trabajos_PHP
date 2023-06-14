<?php

$numero = intval(readline("Ingrese el numero para conocer su factorial: \n "));

/* if($factorial = $numero * ($numero-1)*($numero-2)*($numero-3)*($numero-4)){
    echo $factorial;
} */

if($numero < 0 ){
    echo "Numero no valido. ";
}else{
    $factorial = 1;

    for($i = 1; $i <= $numero; $i++){
        $factorial *= $i;
    }
}
echo "El factorial de $numero es: $factorial";

?>