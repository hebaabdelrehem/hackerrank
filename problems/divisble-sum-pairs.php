
<?php
// divisible Sum Pairs
function divisibleSumPairs($n, $k, $ar)
{
// Write your code here
    $count = 0;
    sort($ar);
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if (($ar[$i] + $ar[$j]) % $k == 0) {
                $count++;
            }
        }
    }
    return $count;

}