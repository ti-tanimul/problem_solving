<?php
$array1 = array(1, 2, 6, 3, 4, 5);
function isSorted($array) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            return false;
        }
    }
    return true;
}
if (isSorted($array1)) {
    echo "yes";
} else {
    echo "no";
}
?>
