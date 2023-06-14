<?php

//Creacion de array
$a = array("Sena", 1000, "dia");

var_dump ($a[3]);


//Array asociativo

$toyota = ["model"=>"HL"];
echo "<br>";
echo $toyota["model"];
echo "<br>";
var_dump($toyota["model"]);


//Array multidimensional
$ford = [
    "model"=>"Focus", 
    "Año"=>2003,        //Se escribe el codigo de esta manera para tener un orden y que el codigo no parezcca tedioso.
    "Placa"=>"JAS223",
    "PaisF" => ["Colombia", "Mexico", "EEUU"]   //este es un array dentro del array
];
echo "<br>";
echo ($ford["model"][1]);
echo "<br>";
echo ($ford["Año"]);
echo "<br>";
echo ($ford["PaisF"][0]);