<?php
$nomeArquivo = "paragrafo.txt"; 
$f = fopen($nomeArquivo, "r") or die("Não foi possível abrir
arquivo");
// lê e imprime conteúdo do arquivo
while(!feof($f))
{
 $dados = fgets($f);
 print $dados;
}
fclose($f);
print $dados;
?> 
