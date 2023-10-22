<?php
function checkMagazine($magazine, $note)
{
    foreach ($note as $key => $n) {
        if (in_array($n, $magazine)) {
            $chave = array_search($n, $magazine);
            unset($magazine[$chave]);
        } else {
            echo "No" . PHP_EOL;
            return;
        }
    }
    echo "Yes" . PHP_EOL;
    // Write your code here

}
