<?php

$listaaOrdenar = [];
$orden = 1;
$number = 0;
echo "Ingrese una lista de números: \n";

while ($number != "stop") {
    $number = readline("Valor ".$orden++.": ");
    if ($number == "stop") {
        echo "Lista creada";
    }else{
        array_push($listaaOrdenar,$number);
    }
}

$temp = 0;
$cambios = 1;

while ($cambios != 0) {
    for ($i=1; $i < count($listaaOrdenar); $i++) { 
        if (($listaaOrdenar[$i-1] > $listaaOrdenar[$i])) {
            $temp = $listaaOrdenar[$i-1];
            $listaaOrdenar[$i-1] = $listaaOrdenar[$i];
            $listaaOrdenar[$i]= $temp;
            $cambios++;
        }
    }
    if($cambios > 1){
        $cambios = 1;
    }else{
        $cambios = 0;
    }
}
echo "\n";

echo "La lista ordenada es: ";
for ($i=0; $i < count($listaaOrdenar) ; $i++) { 
    echo $listaaOrdenar[$i]." ";
}

echo "\n";

?>