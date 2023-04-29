<?php
$a = 24;
$b = 30;
$c = 18;

$s = ($a+$b+$c)/2 ;
$area = sqrt($s* ($s-$a) * ($s-$b) * ($s-$c));
echo $area;

?>