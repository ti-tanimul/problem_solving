<?php
$X = 10;
$K = 5;
$sum = 1;
$power = 1;
for($i= 1; $i<=$K; $i++){
    $power = $power * $X;
    $sum += $power;
}echo $sum;
?>