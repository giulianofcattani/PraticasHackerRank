<?php
function hourglassSum($arr)
{
    // Write your code here
    $sums = [];
    for ($i = 0; $i < 4; $i++) {
        for ($x = 0; $x < 4; $x++) {
            $top = $arr[$i][$x] + $arr[$i][$x + 1] + $arr[$i][$x + 2];
            $middle = $arr[$i + 1][$x + 1];
            $bottom = $arr[$i + 2][$x] + $arr[$i + 2][$x + 1] + $arr[$i + 2][$x + 2];

            $sum = $top + $middle + $bottom;
            $sums[] = $sum;
        }
    }
    return max($sums);
}
