<?php
function fatorial($n) {
    $fat = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fat *= $i;
    }
    return $fat;
}
// Comparado ao recursivo, o iterativo usa menos memória e é mais rápido.
?>
