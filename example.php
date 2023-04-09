<!-- <?php
$str = "1000";
$target_number =3;
$count=0;
for($i=0; $i<$str; $i++){
    $num = rand(1,12);
    if($num == $target_number){
        $count++;
    }
} $probability = $count/$str;
echo $probability;
?> -->

<?php
$string = "This is a string with special characters like @ and #hashtags";
$wordCount = preg_match_all('/\,#~`()+/', $string);
echo $wordCount; // output: 9

?>


