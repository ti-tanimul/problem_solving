<?php
$run1 = 330;
$run2 = 260;
$b_faced = 250;
$ball_played = 300-$b_faced;

$current_rr = ($run2 / $ball_played) * 6;
$require_rr = (($run1 - $run2+1) / $b_faced) * 6;

echo "$current_rr, $require_rr";



?>