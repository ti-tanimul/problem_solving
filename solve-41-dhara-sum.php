<?php
$n = 10;
$sum = 0;
$factorial = 1;
for($i=1; $i<=$n; $i++){
    $factorial *= $i;
    $sum += $i / $factorial;
}echo $sum;
?>
