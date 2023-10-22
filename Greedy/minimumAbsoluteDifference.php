<?php

function minimumAbsoluteDifference($arr)
{
    // Write your code here
    $max = count($arr);
    sort($arr);
    $maxMin = 0;
    $arrAux = array();
    for ($i = 0; $i < $max  - 1; $i++) {
        $calc = abs($arr[$i] - $arr[$i + 1]);
        $arrAux[] = $calc;
    }
    return min($arrAux);
}
