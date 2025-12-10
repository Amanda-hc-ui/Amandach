<?php
// Descrição: imprimindo array associativo com auxílio do laço while
while(list($chave, $valor) = each($dadosUsuario)) {
 print "dadosUsuario[$chave] = $valor <br>";
}
?> 