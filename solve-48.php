<?php
$a = array(1, 3, 4, 6, 9, 10);
$b = array(7);
if(in_array($b, $a)){
    echo "match";
}else{
    echo "not match";
}
?>