<?php
  $target_number = 4;
  $num_rolls = 1000;
  $count = 0;

  for ($i = 0; $i < $num_rolls; $i++) {
    $roll = rand(1, 6);

    if ($roll == $target_number) {
      $count++;
    }
  }

   $probability = $count / $num_rolls;
   echo $probability;
?>

