<?php
function luckBalance($k, $contests)
{
    // Write your code here
    foreach ($contests as $key => $value) {
        $importancia[$key] = $value[0];
        $peso[$key] = $value[1];
    }
    arsort($importancia);
    $i = 0;
    $satisfeito = false;
    $total = 0;
    foreach ($importancia as $key2 => $value) {
        if ($i >= $k) {
            $satisfeito = true;
        }
        if ($peso[$key2] == 1) {
            if ($satisfeito) {
                $total -= $value;
            } else {
                $total += $value;
                $i++;
            }
        } else if ($peso[$key2] == 0) {
            $total += $value;
        }
    }
    return $total;
}
