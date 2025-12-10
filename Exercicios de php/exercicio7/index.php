<html>
<head>
 <title>Conversão de Temperaturas</title>
</head>
<body>
<h3>Conversor de Temperatura</h3>
<form action="temperatura2.php" method="POST"> 
<table>
 <tr>
 <td>Temperatura em F</td>
 <td><input type="text" name="tempF" value=""
maxlength="5"/></td>
 </tr>
 <tr>
 <td colspan="2" align="right">
 <input type="submit" value="Calcular" name="btnAcao"/>
 </td>
 </tr>
</table>
</form>
</body>
</html>
<html>
<body>
<?php
$tempF = $_POST["tempF"];
$tempC = ($tempF - 32) * (5.0/9.0);
print "<h3>";
print "$tempF Fahrenheit equivale a $tempC Celsius";
print "</h3>";
?>
</body>
</html>