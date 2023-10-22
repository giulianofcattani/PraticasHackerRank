<?php

function repeatedString($s, $n)
{
    $sLength = strlen($s);
    $numOfAsInS = substr_count($s, 'a');
    $repetitions = floor($n / $sLength);
    $remainingChars = $n % $sLength;
    $totalAs = $numOfAsInS * $repetitions + substr_count(substr($s, 0, $remainingChars), 'a');
    return $totalAs;
}
