<?php
function twoStrings($s1, $s2)
{
    $arr1 = str_split($s1);
    $arr2 = str_split($s2);

    $retorno = array_intersect($arr1, $arr2);
    if (!empty($retorno))
        return ('YES');
    else
        return ('NO');
    // Write your code here

}
