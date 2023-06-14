<?php

function generateFibonacci($n) {
    $sequence = [];
  
    if ($n <= 0) {
        return $sequence;
    }
  
    $sequence[] = 0;
  
    if ($n == 1) {
        return $sequence;
    }
  
    $sequence[] = 1;
  
    for ($i = 2; $i < $n; $i++) {
        $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
    }
  
    return $sequence;
}

// Example usage:
$length = 11;
$fibonacciSequence = generateFibonacci($length);

// Output the sequence
foreach ($fibonacciSequence as $number) {
    echo $number . " ";
}

?>