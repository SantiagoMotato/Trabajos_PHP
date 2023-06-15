<?php

function FierroAlv($j){
    for($i=1; $i <= 100; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
            echo "Peso Pluma";
        }elseif($i % 3 == 0){
                echo "Peso";
        }elseif($i % 5 == 0){
            echo "Pluma";
        }else{
            echo $i . " ";
        }
    }
}

FierroAlv($i);

?>  