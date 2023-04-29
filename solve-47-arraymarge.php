<?php
$a = array(1, 3, 5);
$b = array(4, 10);
$c = array_merge($a, $b);
sort($c);

$length = count($c);
for($i = 0; $i <$length; $i++){
    echo $c[$i];
    echo " ";
}
?>