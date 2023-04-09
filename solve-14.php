<?php
$str1 = "hello world";
$str2 = "l";
$count = 0;
for($i=0; $i<strlen($str1); $i++){
    if ($str2[0]==$str1[$i]){
        $count++;
    }
}echo $count;
?>