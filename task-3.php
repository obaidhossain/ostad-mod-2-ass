<?php
$f1 = 0;
$f2 = 1;

echo "The first 10 Fibonacci numbers less than or equal to 100 are:\n";

for ($i = 1; $i <= 10; $i++) {
    // Break the loop, if the Fibonacci number is greater than 100
    if ($f1 > 100) {
        break;
    }

    // Print the Fibonacci number
    echo "$f1 ";

    // Regenerate the numbers for the next Fibonacci number
    $fn = $f1 + $f2;
    $f1 = $f2;
    $f2 = $fn;
}
?>
