<?php
$n = 10;
pascal($n);
function pascal($n){
    for($pas = 1; $pas <= $n; $pas++){
        for($i = 0; $i <$n - $pas; $i++)
        echo " ";

        $C = 1;
        for($i = 1; $i <= $pas; $i++){
            echo $C, " ";
            $C = $C * ($pas - $i) / $i;
        }echo "\n";
    }
}


?>
