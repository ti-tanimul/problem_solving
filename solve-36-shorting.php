<?php
$str = array("x-ray", "apple", "cat", "bat", "hoyse");
sort($str);
$length = count($str);
for($i=0; $i<$length; $i++){
    echo $str[$i]. "<br>";
}
?>
