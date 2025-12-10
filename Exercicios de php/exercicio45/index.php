<HTML>
<BODY>
<?php
// Descrição: apresenta listagem dos contatos cadastrados no banco
de dados
//abre conexao ao servidor MySQL
$conexaoBD = mysql_connect("localhost", "root", "") or
die("Erro:" . mysql_error());
//conecta-se ao banco de dados meu_banco
mysql_select_db("meu_banco", $conexaoBD) or die("Erro:" .
mysql_error());
//cria consulta SQL
$sql = "SELECT ds_nome, ds_email, ds_endereco, ds_telefone,
dt_aniversario FROM contato_tab ORDER BY ds_nome ";
//executa consulta
$resultado = mysql_query($sql, $conexaoBD) or die("Erro:" .
mysql_error());
?>
<TABLE BORDER="1">
 <TR>
 <TD><b>Nome</b></TD>
 <TD><b>Email</b></TD>
 <TD><b>Endereço</b></TD>
 <TD><b>Telefone</b></TD>
 <TD><b>Aniversário</b></TD>
 </TR> 
 <?
while($registro = mysql_fetch_array($resultado)) //lê registro
{
?>
 <TR>
 <TD><?= $registro["ds_nome"] ?></TD>
 <TD><?= $registro["ds_email"] ?></TD>
 <TD><?= $registro["ds_endereco"] ?></TD>
 <TD><?= $registro["ds_telefone"] ?></TD>
 <TD><?= $registro["dt_aniversario"] ?></TD>
 </TR>
<?
}
?>
</TABLE>
</BODY>
</HTML>
<?
//fecha conexao ao servidor MySQL
mysql_close($conexaoBD);
?>
<?php
if($_POST) {
 $isbn = $_POST["txtISBN"];
 $titulo = $_POST["txtTitulo"];
 $autor = $_POST["txtAutor"];
 $editora = $_POST["txtEditora"];
 $conexao = mysql_connect("localhost", "root", "") or
die(mysql_error());
 mysql_select_db("banco_aluno") or die(mysql_error());
 if ($isbn != NULL && $titulo != NULL) {
 $sql = "INSERT INTO livro_tab (isbn, titulo, autor, editora)
 VALUES ('$isbn', '$titulo', '$autor', '$editora
 mysql_query($sql) or die(mysql_error());

 mysql_close($conexao);
 $mensagem = "Livro cadastrado com sucesso!";
 }
}
?>
<HTML>
<HEAD><TITLE>Tela Cadastro</TITLE></HEAD>
<BODY>
<FORM ACTION="" METHOD="post">
<CENTER>Cadastro de Livros</CENTER>
<TABLE ALIGN="center">
<TR>
 <TD>ISBN:</TD>
 <TD><INPUT TYPE="text" NAME="txtISBN"/></TD>
</TR>
<TR>
 <TD>Título:</TD>
 <TD><INPUT TYPE="text" NAME="txtTitulo"></TD>
</TR>
<TR>
 <TD>Autor:</TD>
 <TD><INPUT TYPE="text" NAME="txtAutor"></TD>
</TR>
<TR>
 <TD>Editora:</TD>
 <TD><INPUT TYPE="text" NAME="txtEditora"></TD> 
 </TR>
<TR>
 <TD COLSPAN="2" ALIGN="right">
 <INPUT TYPE="submit" NAME="btnCadastrar" VALUE="Cadastrar"/>&nbsp;
 <INPUT TYPE="reset" VALUE="Limpar"/>
 </TD>
</TR>
<BR/><CENTER><?= $mensagem ?></CENTER>
</TABLE>
</BODY>
</HTML> 