<?php
$number = 100;

function prime($n){
    if($n <= 1){
        return false;
    }
    for($i=2; $i<=sqrt($n); $i++){
        if($n %$i ==0){
            return false;
        }
    }return true;
}

$count = countPrime($number);

function countPrime($number){
    $count=0;
    for($i=2; $i<=$number; $i++){
        if(prime($i)){
            $count++;
        }
    }return $count;
}

echo $count;
?>


