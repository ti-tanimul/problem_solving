<?php
$x=10;
function factorial($x){
    $fact = 1;
    for($i=$x; $i>0; $i--){
        $fact = $fact * $i;
    }echo $fact;
}echo factorial($x);

?>