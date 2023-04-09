<?php

$string = "sjdficd aiujdidiaoid urwie weirqiwo tu9wur";
$vowels = array("a", "e", "i", "o", "u");
$count = 0;

for ($i = 0; $i < strlen($string); $i++) {
    if (in_array(strtolower($string[$i]), $vowels)) {
        $count++;
    }
}echo $count;

?>

