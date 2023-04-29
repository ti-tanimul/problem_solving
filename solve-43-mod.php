<?php

$p = 50;
$q = 2;
$c = 3;
$result = modPow($p, $q, $c);
function modPow($p, $q, $c) {
  $result = 1;
  while ($q > 0) {
    if ($q % 2 == 1) {
      $result = ($result * $p) % $c;
    }
    $p = ($p * $p) % $c;
    $q = intdiv($q, 2);
  }
  return $result;
}echo "$p^$q mod $c = $result";



?>
