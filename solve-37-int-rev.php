<?php
$num = 12345;
$reverse = 0;

while ($num != 0){
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num =(int) ($num/10);
}echo $reverse;
?>

<br>
<br>

<?php
$str = "345849392";
echo strrev($str);
?>

