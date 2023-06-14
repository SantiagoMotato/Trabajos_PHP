<?php

//Operador Ternario

//if(5<4) echo "Hola";

/* if(9>7){
    $total = 9+7;
    echo $total;
}else {
    echo $total = 9*7;
} */

// El codigo de abajo resuma el codigo de arriba para evitar saturacion

//Condicion ? valor verdadero : valor falso
(9>7)?($total = 9+7):($total = 9*7);
echo $total;