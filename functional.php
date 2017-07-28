<?php
function sum($array) {
    if (empty($array))
        return 0;
    else
        return $array[0] + sum(array_slice($array, 1));
}

$total = sum(array(1, 2, 3)); // 6
echo '<pre>' . $total . '</pre>';

$array2 = [1, 2, 3];
$sl = array_slice($array2, 1);
var_dump($sl);