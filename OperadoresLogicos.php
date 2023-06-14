<?php

/* $a = 1;
$b = 2;

echo ++$a."-".++$b;


2. Estructuras condicionales: usadas para evaluar opciones o tomar deciones

if(expresion):
    codigo a ejecutar
endif;

if(expresion){
    codigo a ejecutar
};



$a = 3;
$b = 5;

//Forma 1
if($a<$b):
    echo "a es mayor que b";
endif;

//Forma 2
if($a < $b){
    echo "a es mayor que b";
} */




/* $cantidadpc = array(4,7,12);

$c = 700;
$descuento1 = 0.1;
$descuento2 = 0.2;
$descuento3 = 0.4;



if($cantidadpc[0]<5):
    $totalcompra = $c*$cantidadpc[0];
    $totaldescuento = $totalcompra*$descuento1;
    $valorFinal = $totalcompra-$totaldescuento;

    echo "El precio es  del 10% de descuento es ".$valorFinal;
endif;
echo"<br>";
if($cantidadpc[1]>=5 and $cantidadpc[1]<10):
    $totalcompra = $c*$cantidadpc[1];
    $totaldescuento = $totalcompra*$descuento2;
    $valorFinal = $totalcompra-$totaldescuento;

    echo "El precio es  del 20% de descuento es ".$valorFinal;
endif;
echo"<br>";
if($cantidadpc[2]>=10):
    $totalcompra = $c*$cantidadpc[2];
    $totaldescuento = $totalcompra*$descuento3;
    $valorFinal = $totalcompra-$totaldescuento;

    echo "El precio es  del 40% de descuento es  ".$valorFinal;
endif; */


// Else Elseif Else

/* Metodo 1
$a = 4;
$b = "3";

if($a>$b){
    echo "$a es mayor que $b";
}elseif($a === $b){
    echo "$a es igual que $b";
}
else{
    echo "Ninguna es correcta";
} */




/* Metodo 2: ayuda a disminuir la saturacion de codigos

$a = 4;
$b = "5";

if($a>$b):
    echo "$a es mayor que $b";
    elseif ($a==$b):
    echo "$a es igual que $b";
else:
    echo "Ninguna es correcta";
endif; */



// Ejercicios en clase

/* $a = 10;

if($a>10):
    echo "$a es mayor que 10";
    elseif ($a<10):
    echo "$a es menor que 10";
    elseif ($a==10):
    echo "$a es igual que 10";
endif; */


$a = 'hola';
$b = 'hola';

if('hola' == 'hola'){
    echo "El string coincide";
} else {
    echo "El string no coincide";
}
