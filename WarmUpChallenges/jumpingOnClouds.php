<?php

function jumpingOnClouds($c)
{
    $steps = 0;
    $current = 0;

    foreach ($c as $k => $cloud) {
        if ($k <= $current) {
            continue;
        }

        if ($c[$current + 2] === 1) {
            $current++;
        } else {
            $current += 2;
        }

        $steps++;
    }

    return $steps;
    // Write your code here

}
