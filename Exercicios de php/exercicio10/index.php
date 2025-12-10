<?php
$x = (int) $_POST["txtx"];
$y = (int) $_POST["txty"];
$maior = ($x > $y) ? $x : $y;
print "maior valor = $maior";
?>