<?php
// Descrição: realiza contagem de acessos a esta página
$nomeArquivo = "contadorPagina.txt";
$contagem = 0;
if(file_exists($nomeArquivo)) {
 $f = fopen($nomeArquivo, "r");
 $contagem = fread($f, filesize($nomeArquivo));
 fclose($f);
}
$contagem++;
$f = fopen($nomeArquivo, "w");
fwrite($f, $contagem);
fclose($f);
?>
<html>
<head>
<title>Contador de página</title>
</head>
<body>
<h2>Quantidade de acessos a esta página: <?= $contagem ?></h2>
</body>
</html> 