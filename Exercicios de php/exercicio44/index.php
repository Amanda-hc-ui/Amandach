
<?php
// Descrição: salva dados de um contato no banco de dados
$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$obs = $_POST["txtObs"];
$telefone = $_POST["txtTelefone"];
$endereco = $_POST["txtEndereco"];
$email = $_POST["txtEmail"];
$dataAniv = explode("/", $_POST["txtDataAniv"]); 
$dataAniv = array_reverse($dataAniv);
$dataAniv = implode("-", $dataAniv);
//abre conexao ao servidor MySQL
$conexaoBD = mysql_connect("localhost", "root", "") or
die(mysql_error());
//conecta-se ao banco de dados meu_banco
mysql_select_db("meu_banco", $conexaoBD) or die("Erro:" .
mysql_error());
//comando SQL de cadastro
$sql =
"INSERT INTO contato_tab (ds_nome, ds_email, ds_telefone,
ds_endereco, ds_observacao,dt_aniversario) VALUES ('$nome',
'$email', '$telefone', '$endereco', '$obs', '$dataAniv') ";
mysql_query($sql) or die("Erro no comando SQL: ". mysql_error());
if(mysql_affected_rows($conexaoBD) == 1) {
 print "Contato cadastrado com sucesso!";
}
else {
 print "Cadastro não realizado. Motivo: " . mysql_error();
}
//fecha conexao ao servidor MySQL
mysql_close($conexaoBD);
?> 