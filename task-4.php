<?php
// Function to print the first n numbers in the Fibonacci series
function FibonacciNumbers($count) {
    $f1 = 0;
    $f2 = 1;
    
    echo "The first $count numbers in the Fibonacci series are:\n";
    
    for ($i = 0; $i < $count; $i++) {
        echo "$f2 ";
        
        $fn = $f1 + $f2;
        $f1 = $f2;
        $f2 = $fn;
    }
}

FibonacciNumbers(15);
?>
