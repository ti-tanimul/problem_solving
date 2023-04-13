<?php
$n = 153;
$temp = $n;

$res = 0;
while($temp !=0){
    $rem = $temp % 10;
    $res += ($rem * $rem * $rem);
    $temp = $temp / 10;
}if($n == $res){
    echo "Armstrong Number";
}else{
    echo "Not Armstring Number";
}

?>