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

<!-- <?php
$string = "This is a string with special characters like @ and #hashtags";
$wordCount = preg_match_all('/\,#~`()+/', $string);
echo $wordCount; // output: 9

?> -->

<?php
// Function to print Pascal's Triangle
function printPascal($n)
{
    // Iterate through every line
    for ($line = 1; $line <= $n; $line++)
    {
        // Every line has number of integers
        // equal to line number
        for ($i = 0; $i < $n - $line; $i++)
            echo " ";

        // $C stores current line's numbers
        $C = 1;
        for ($i = 1; $i <= $line; $i++)
        {
            echo $C," ";
            $C = $C * ($line - $i) / $i;
        }
        echo "\n";
    }
}

// Driver Code
$n = 11;
printPascal($n);
?>



