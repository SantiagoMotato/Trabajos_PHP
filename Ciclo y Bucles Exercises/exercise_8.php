<?php


echo "Digite el rango que desee saber los números perfectos \n";

$numero1 = intval(readline("Numero1: "));
$numero2 = intval(readline("Numero2: "));
$sum = 0;

$numeroPerfecto = [];

for ($i=$numero2; $i <= $numero1 ; $i++) { 
    for ($j=1; $j <= $i ; $j++) { 
        if($i % $j == 0 && $i != $j){
            $sum += $j;
        }
    }
    if($sum == $i){
        array_push($numeroPerfecto, $i);
    }
    $sum = 0;
}
echo "Los sumero perfectos entre $numero1 y $numero2: ";
for ($i=0; $i < count($numeroPerfecto); $i++) { 
    echo $numeroPerfecto[$i]." ";
}
echo " \n";

?>