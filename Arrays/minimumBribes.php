<?php

function minimumBribes($q){
    $resultado = 0;
    $n = count($q);
    $minimo = $n;
    for($i = $n - 1; $i >= 0; $i--){
        $pessoa = $q[$i];
        $posicao = $i + 1;
        if($pessoa > $posicao){
            $resultado += $pessoa - $posicao;
            if(($pessoa - $posicao) > 2){
                echo "Too chaotic" . PHP_EOL;
                return;
            }
        }else{
            
            if($minimo > $pessoa){
                $minimo = $pessoa;
            }else if($pessoa != $minimo){
                $resultado++;
            }
        }
    }
    echo $resultado . PHP_EOL;
}