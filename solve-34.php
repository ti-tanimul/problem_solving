<?php
$num = 100;
$A = 5;
$B = 6;
for($i=1; $i <=$num; $i++){
    if($i%$A == 0 && $i%$B == 0){
        echo $i. " ";
    }
}
?>