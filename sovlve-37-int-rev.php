<?php
$num = 12343;
$reverse = 0;

while ($num != 0){
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num =(int) ($num/10);
}echo $reverse;
?>

