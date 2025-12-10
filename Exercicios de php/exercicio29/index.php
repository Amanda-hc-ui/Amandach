<?php
$A = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
$B = array(25, 50, 75, 100);
$C = array();
for($i = 0; $i < count($A); $i++) {
 for($j = 0; $j < count($B); $j++) {
 if($A[$i] == $B[$j]) {
 $C[] = $A[$i];
 }
 }
}
print "Valores do array C: <br>";
for($i = 0; $i < count($C); $i++) {
 print $C[$i] . "<br>";
}
?> 
