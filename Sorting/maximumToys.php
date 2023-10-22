<?php

function maximumToys($prices, $k)
{
    // Write your code here
    // Coloca em ordem
    sort($prices);
    $aux = 0;
    $pilasGasto = 0;
    foreach ($prices as $pila) {
        if (($pilasGasto + $pila) <= $k) {
            $pilasGasto += $pila;
            $aux++;
        } else {
            //Sai do loop
            break;
        }
    }
    return $aux;
}
