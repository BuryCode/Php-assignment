<?php
function factorial($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) 
    {
        $result *= $i;
    }
    return $result;
}
$number =   3;
echo "Factorial of $number is " . factorial($number);
?>
