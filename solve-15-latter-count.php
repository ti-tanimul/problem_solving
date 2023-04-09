<!-- <?php
$lorem = "dfuhvsndv sdfor ehrfn erhfsmd fserhf sdksf";
echo strlen($lorem);
?> -->

<br>
<br>

<?php
$str = "sdihfs sjdnm kakehd";
$count = array();
for($i = 0; $i<strlen($str); $i++){
    $char = $str[$i];
    if(ctype_alpha($char)){
        if(array_key_exists($char, $count)){
            $count[$char]++;
        }else{
            $count[$char] =1;
        }
    }
}
foreach($count as $letter =>$count){
    echo $letter. " = " . $count . "\n";
}
?>