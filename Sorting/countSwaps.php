<?php
function countSwaps($a)
{
    // Write your code here
    $n = count($a);
    $numSwaps = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1; $j++) {
            if ($a[$j] > $a[$j + 1]) {
                //Faz a troca
                $aux1 = $a[$j];
                $aux2 = $a[$j + 1];
                $a[$j] = $aux2;
                $a[$j + 1] = $aux1;
                $numSwaps++;
            }
        }
    }
    $primeiro = $a[0];
    $ultimo = $a[$n - 1];
    echo "Array is sorted in " . $numSwaps . " swaps." . PHP_EOL;
    echo "First Element: " . $primeiro .  PHP_EOL;
    echo "Last Element: " . $ultimo .  PHP_EOL;
}
