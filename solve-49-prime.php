<?php
$number = 11;
function prime($n){
    if($n <= 1){
        return false;
    }
    for($i=2; $i<=sqrt($n); $i++){
        if($n % $i == 0){
            return false;
        }
    }return true;
}

if (prime($number)) {
    echo $number . " is prime.";
} else {
    echo $number . " is not prime.";
}
?>