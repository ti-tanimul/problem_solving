<?php
$N = 8;
for($i=$N; $i >= 0; $i--){
    if($i == 1){
        echo "1";
    }elseif($i == 2){
        echo "2 +";
    }
    else{
        echo "2^ +", $i;
    }
}
?>