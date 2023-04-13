<?php
$x = 99;
$N = 1000;

for($i=1; $i<$N; $i++){
    if($i % $x == 0){
        echo $i. " ";
    }
}
?>