<?php
function maiorValor($array) {
    $maior = $array[0];
    foreach ($array as $valor) {
        if ($valor > $maior) {
            $maior = $valor;
        }
    }
    return $maior;
}
?>
