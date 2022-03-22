<?php
// migratory birds problem
function migratoryBirds($arr)
{
    // Write your code here
    sort($arr);
    $arrayCountValues = array_count_values($arr);

    $maxValue = max($arrayCountValues);

    return array_search($maxValue, $arrayCountValues);
}

$arr = [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];

$result = migratoryBirds($arr);
