<?php
$str = "DHN";
$int = "";
for($i=0; $i < strlen($str); $i++){
    if($str[$i] >= 'A' && $str[$i]<= 'Z'){
        $char = ord($str[$i])-64;
        $int .= $char;
    }
}echo $int;
?>