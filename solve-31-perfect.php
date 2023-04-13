<?php
$limit = 500;
function isPerfectNumber($number){
  $sum = 0;
  for($i=1; $i<$number; $i++){
    if($number % $i == 0){
      $sum += $i;
    }
  }
  return ($sum == $number);
}
function getPerfectNumbers($limit){
  $perfectNumbers = array();
  for($i=1; $i<=$limit; $i++){
    if(isPerfectNumber($i)){
      array_push($perfectNumbers, $i);
    }
  }
  return $perfectNumbers;
}
$perfectNumbers = getPerfectNumbers($limit);
foreach($perfectNumbers as $number){
    echo "$number ";
}
?>
