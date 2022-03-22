<?php
// Sales by Match
function sockMerchant($n, $ar): int
{
    // Write your code here
    $duplication = [];
    $sockPairCount = 0;

    for ($i = 0; $i < $n; $i++) {
        $item = $ar[$i];
        $duplication[$item] = isset($duplication[$item]) ? $duplication[$item] + 1 : 1;
        if ($duplication[$item] === 2) {
            $sockPairCount++;
            unset($duplication[$item]);
        }
    }

    return $sockPairCount;
}