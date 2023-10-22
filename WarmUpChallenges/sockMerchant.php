<?php

function sockMerchant($n, $ar)
{

    // Write your code here
    $count = 0;
    $meias = [];
    foreach ($ar as $number) {
        $meias[$number]++;
    }

    foreach ($meias as $meia) {
        $count += floor($meia / 2);
    }
    return $count;
}
