<?php
function rotLeft($a, $d)
{
    $n = count($a);
    $d = $d % $n;
    $result = array_slice($a, $d);
    $result = array_merge($result, array_slice($a, 0, $d));
    return $result;
}
