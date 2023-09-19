<?php
$start = 1;
$end = 50;
$skipMultiple = 5;
$seperator = ', ';

// skip the last number in loop, if that encounters with skipMultiple 
if($end % $skipMultiple === 0) {
    $end = $end - 1;
}
for ($i = $start; $i <= $end; $i++) {
    if ($i % $skipMultiple === 0) {
        continue;
    }
    if($i < $end) {
        echo $i . $seperator;
    } else {
        echo $i;
    }
}
?>
