<?php
$string = "hello my name is Tanimul";
$vowel = "a,e,i,o,u";
$vowels = "";
$constant = "";
for($i=0; $i< strlen($string); $i++){
    $latter = strtolower($string[$i]);
    if(strpos($vowel, $latter) !==false){
        $vowels .= $latter;
    }else{
        $constant .= $latter;
    }
} echo $vowels . "<br>". $constant;
?>