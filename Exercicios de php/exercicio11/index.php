<?php
$voto = (int) $_POST["voto"];
switch ($voto) {
 case 1: print "Opção 1 = Lula";
 break;
 case 2: print "Opção 2 = Ciro";
 break;
 case 3: print "Opção 3 = Eneias";
 break;
 default: print "Opção inválida!";
}
?>
