<?php
$char = "5";

if($char>= 'a' && $char<= 'z'){
    echo "lowerCase";
}elseif($char>= 'A' && $char<= 'Z'){
    echo "UpperCase";
}elseif($char>= '0' && $char<= '9'){
    echo "Numerical Number";
}else{
    echo "Special Character";
}
?>