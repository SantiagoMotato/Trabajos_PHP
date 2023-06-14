<?php

/* $var1 = "Hello";
$var2 = "Wolrd";

echo $var1." ".$var2; */

//Hello, mi nombre es TAL, y vendo carros marac toyota y ford . Tenemos modelos desde el año 2008 y existen colores negro, blanco, y rojo. El valor de cada carro es de 50kk

$var3 = "Hola. Mi nombre es Santy. Vendo carros Toyota y Ford.";
$var4 = "Tenemos modelos de Toyota";
$var5 = "Tenemos modelos de Ford";

$toyota = [
    "model"=>"HL 2008",
    "color"=> ["negro", "blanco", "rojo"],
    "precio" => "50kk"
];

//$toyotaColor =["color"=>"negro", "blanco", "rojo"];
$ford = ["model"=>"Dragon 2008"];


echo $var3;
echo "<br>";
echo "<br>";
echo $var4;
echo "<br>";
echo $toyota["model"];
echo ($toyota["color"][0]);
echo $toyota["precio"];

echo "<br>";
echo "<br>";

echo $var5;
echo "<br>";
echo $ford["model"];

