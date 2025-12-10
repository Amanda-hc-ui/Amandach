<html>
<head>
 <title>Conversão de Temperatura : F -> C</title>
</head>
<body>
<h3>Conversor de Temperatura</h3>
<form action="" method="POST">
<table>
 <tr>
 <td>Temperatura inicial em F</td>
 <td> 
 <input type="text" name="tempInicial" value="<?=
$_POST["tempInicial"] ?>" maxlength="5"/>
 </td>
 </tr>
 <tr>
 <td>Temperatura final em F</td>
 <td>
 <input type="text" name="tempFinal" value="<?=
$_POST["tempFinal"] ?>" maxlength="5"/>
 </td>
 </tr>
 <tr>
 <td colspan="2" align="right">
 <input type="submit" value="Calcular" name="btnAcao"/>
 </td>
 </tr>
 <tr>
 <td colspan="2">&nbsp;</td>
 </tr>
</table>
<?php
// verifica se acionou o botão para cálculo
if ($_POST != NULL) {

 // leitura das temperaturas
 $inicial = $_POST["tempInicial"];
 $final = $_POST["tempFinal"];
}
 // validação dos parâmetros
 if ($inicial == NUL
 || $final == NULL
 || !is_numeric($inicial)
 || !is_numeric($final)) {
 print "<font color='red'>";
 print "Parâmetros inválidos. Tente novamente!";
 print "</font>";
 exit();
 }
?>
<br/>
Resultado<br/>
<hr align="left" width="40%"/>
<table border="1" width="30%">
 <tr bgcolor="#7f7fa5" align="center">
 <td>Fahrenheit</td>
 <td>Celsius</td>
 </tr>
 <?php
 // cálculo de conversão da faixa de temperaturas
 for ($t = $inicial; $t <= $final; $t += 10) {
 ?>
 <tr align="center">
 <td><?= $t ?></td>
 <td><?= number_format(($t - 32) * (5.0/9.0), 4) ?></td>
 </tr>
 <?php
 } //fim do for
 ?>
</table> 
<?php
//fim do if
?>
</form>
</body>
</html> 