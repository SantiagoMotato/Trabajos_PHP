<?php

  $carsList = intval(readline("Ingrese la cantidad de autos a almacenar en su lista... "));

  $numberCars = [];
  for($i = 1; $i <= $carsList; $i++){
      $numberCars[$i-1] = readline("Ingrese su lista de autos... $i \n");
  }

  $searchList = readline("Por favor, ingrese el auto que desee consultar. \n");

  for($j = 1; $j <= $carsList; $j++){    
    if($numberCars[$j-1] == $searchList){
      echo "El auto $searchList esta en la posicion ".$j-1;
      break;
    }
  }


?>