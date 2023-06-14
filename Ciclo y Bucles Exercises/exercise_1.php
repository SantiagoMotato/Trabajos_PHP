<?php

//solicitamos al ususario ingresar cantidad de numeros
$numeroLista = intval(readline("Ingrese la catidad de numeros a promediar \n "));
//construir el array que guardará los datos a promediar
$datosPromedio = [];
for($i = 1; $i <= $numeroLista; $i++){
    $datosPromedio[$i-1] = floatval(readline("Ingrese el valor: $i \n"));
}

//El siguiente For va a cacular la suma y promedio de los datos
$suma=0.0;
foreach($datosPromedio as $aux){
    $suma += $aux;
}
/* 
for($i = 1; $i <= $numeroLista; $i++){
    $suma += $datosPromedio[$i-1];
} */
//$promedio = $suma/$numeroLista;
$promedio = $suma/count($datosPromedio);
echo "La suma de los datos ingresado es: ".$suma."\n";
echo "El promedio de los datos ingresados es: ".$promedio."\n";

//var_dump($datosPromedio);

?>

