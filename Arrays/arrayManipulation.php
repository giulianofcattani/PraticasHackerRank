<?php
function arrayManipulation($n, $queries)
{
    $a = array_fill(0, $n, 0);

    foreach ($queries as $query) {
        $inicio = $query[0] - 1;
        $fim = $query[1] - 1;
        $valor = $query[2];

        $a[$inicio] += $valor;

        if ($fim + 1 < $n) {
            $a[$fim + 1] -= $valor;
        }
    }

    $maxValue = $a[0];
    $currentValue = $a[0];
    for ($i = 1; $i < $n; $i++) {
        $currentValue += $a[$i];
        $maxValue = max($maxValue, $currentValue);
    }

    return $maxValue;
}
