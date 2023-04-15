<?php
$x1 = 2;
$x2 = 5;
$y1 = 3;
$y2 = 7;
$R = 6;

$redious = sqrt(pow($x2-$x1, 2) + pow($y2-$y1, 2));
    if($redious <= $R){
        echo "The point is not inside the circle";
    }else{
        echo "The point is inside the circle";
    }
?>