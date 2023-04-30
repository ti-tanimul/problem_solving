<?php
function countFactorial($n) {
    $count = 0;
    for ($i = 5; $n / $i >= 1; $i *= 5) {
      $count += floor($n / $i);
    }
    return $count;
  }
  $count = countFactorial(100);
  echo $count;
    
?>