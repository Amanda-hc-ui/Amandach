<?php
// arquivo a ser lido
$nomeArquivo = "paragrafo.txt";
// abre arquivo no modo leitura e retorna manipulador de arquivo
$f = fopen($nomeArquivo, "r") or die("Não foi possível abrir
arquivo");
// lê conteúdo do arquivo associado ao manipulador
$dados = fread($f, filesize($nomeArquivo)) or die("Erro na
leitura");
// fecha arquivo
fclose($f);
// imprime dados
print $dados;
?> 