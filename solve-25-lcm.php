<?php
function lcm ($n1, $n2){
   return abs($n1 * $n2) / gcd($n1, $n2);
}

function gcd($n1, $n2){
   while($n2 != 0){
      $rem = $n1 % $n2;
      $n1 = $n2;
      $n2 = $rem;
   }
   return $n1;
} echo lcm(30, 60);
?>
