<?php
function EvenNumbersWithLoop($start, $end, $step) {
    $start = ($start % 2 !== 0) ? ($start + 1) : $start;
    for ($i = $start; $i <= $end; $i += $step) {
        if($i < $end) {
            echo $i . ', ';
        } else { 
            echo $i;
        }
    }
}
echo "Even numbers from 1 to 20 with a step of 2 (using for loop): ";
EvenNumbersWithLoop(1, 20, 2);
echo PHP_EOL;

function EvenNumbersWithWhileLoop($start, $end, $step) {
    $current = ($start % 2 !== 0) ? ($start + 1) : $start;
    while ($current <= $end) {
        if($current < $end) {
            echo $current . ', ';
        } else { 
            echo $current;
        }
        $current += $step;
    }
}
echo "Even numbers from 1 to 20 with a step of 2 (using while loop): ";
EvenNumbersWithWhileLoop(1, 20, 2);
echo PHP_EOL;

function EvenNumbersWithDoWhileLoop($start, $end, $step) {
    $current = ($start % 2 !== 0) ? ($start + 1) : $start;
    do {
        if($current < $end) {
            echo $current . ', ';
        } else { 
            echo $current;
        }
        $current += $step;
    } while ($current <= $end);
}
echo "Even numbers from 1 to 20 with a step of 2 (using do-while loop): ";
EvenNumbersWithDoWhileLoop(1, 20, 2);
echo PHP_EOL;
?>
