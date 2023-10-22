<?php

function minimumSwaps($arr) {
    $swaps = 0;
    $length = count($arr);
    
    for ($i = 0; $i < $length; $i++) {
        // Verifica se o elemento está no lugar certo
        if ($arr[$i] != $i + 1) {
            // Realiza a troca para colocar o elemento no lugar certo
            $temp = $arr[$i];
            $arr[$i] = $arr[$temp - 1];
            $arr[$temp - 1] = $temp;
            $swaps++;
            // Reavalia o índice atual no próximo ciclo do loop for
            $i--;
        }
    }
    return $swaps;
}