<?php

$cantidadCamisas = 4;
$precioCamisa = 2000;

if($cantidadCamisas > 3){
    $descuento = $precioCamisa*0.2;
    $totalDescuento = $precioCamisa - $descuento;

    echo "El descuento del 20% por la compra de 3 o más camisas es de ".$totalDescuento;
    
}elseif($cantidadCamisas < 3){
    $descuento = $precioCamisa*0.1;
    $totalDescuento = $precioCamisa - $descuento;

    echo "El descuento del 10% por la compra de 2 o menos camisas es de ".$totalDescuento;
}

?>