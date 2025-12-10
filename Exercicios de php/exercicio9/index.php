<?php
$numero = (int) $_POST["txtNumero"];
if(($numero % 2) == 0) {
 print "O número inteiro $numero é par";
}
else {
 print "O número inteiro $numero é impar";
}
?>