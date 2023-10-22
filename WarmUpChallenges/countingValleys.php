<?php
function countingValleys($steps, $path)
{
    // Write your code here
    $total = 0;
    $level = 0;
    $ehVale = false;
    $ehMontanha = false;
    $aux = 0;
    for ($i = 0; $i < $steps; $i++) {
        $aux = $level;
        if ($path[$i] === 'U') {
            $level++;
        } else {
            $level--;
        }
        if ($level < 0) {
            $ehVale = true;
        } else if ($level > 0) {
            $ehVale = false;
        }
        if ($aux < 0 && $level == 0) {
            $total++;
        }
    }
    return $total;
}
