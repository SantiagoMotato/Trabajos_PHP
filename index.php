<?php

$number1 = 8;
$number2 = 2;
$number3 = 12;

if($number1 < $number2){
    echo $number2." is the largest numberwd. ";
}elseif($number2 > $number1){
    echo $number2." is the largest number. ";
}elseif($number3 > $number1){
    echo $number3." is the largest number. ";
}elseif($number3 > $number2){
    echo $number3." is the largest number. ";
}elseif($number3 < $number1){
    echo $number1." is the largest number. ";
}elseif($number3 < $number2){
    echo $number2." is the largest number. ";
}

?>