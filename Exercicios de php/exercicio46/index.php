<?php
$isbn = $_POST["txtISBN"];
$titulo = $_POST["txtTitulo"];
$autor = $_POST["txtAutor"];
$editora = $_POST["txtEditora"];
$conexao = mysql_connect("localhost", "root", "") or
die(mysql_error());
mysql_select_db("meu_banco") or die(mysql_error());
if ($_POST) {
 $sql = "SELECT isbn, titulo, autor, editora FROM livro_tab WHERE
1 = 1 ";
 if ($isbn != NULL)
 $sql = $sql . " AND isbn = '$isbn' "; 
 if ($titulo != NULL)
 $sql = $sql . " AND titulo LIKE '%$titulo%' ";
 if ($autor != NULL)
 $sql = $sql . " AND autor LIKE '%$autor%' ";
 if ($editora != NULL)
 $sql = $sql . " AND editora LIKE '%$editora%' ";
 $sql = $sql . " ORDER BY titulo ";
 $resultado = mysql_query($sql) or die(mysql_error());
}
?>
<HTML>
<HEAD><TITLE>Tela Cadastro</TITLE></HEAD>
<BODY>
<FORM ACTION="" METHOD="post">
<CENTER>Consulta Livros</CENTER>
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
 <INPUT TYPE="submit" NAME="btnConsultar"
VALUE="Consultar"/>&nbsp;
 </TD>
</TR>
</TABLE>
<?php
if ($resultado != NULL) {
?>
<TABLE ALIGN="center">
<TR>
<TD><B>ISBN</B></TD>
<TD><B>Título</B></TD>
<TD><B>Autor</B></TD>
<TD><B>Editora</B></TD>
<TD><B>&nbsp;</B></TD>
<TD><B>&nbsp;</B></TD>
</TR>
<? while ($registro = mysql_fetch_array($resultado)) { ?>
<TR>
 <TD><?= $registro["isbn"] ?></TD>
 <TD><?= $registro["titulo"] ?></TD>
 <TD><?= $registro["autor"] ?></TD>
 <TD><?= $registro["editora"] ?></TD>
 <TD> 
  <a
href="excluirLivro.php?isbn=<?=$registro["isbn"]?>&acao=excluir">
 Excluir
 </a>
 </TD>
 <TD>
 <a
href="atualizarLivro.php?isbn=<?=$registro["isbn"]?>&acao=atualizar"
>
 Atualizar
 </a>
 </TD>
</TR>
<? } //while
} //if
?>
</TABLE>
</BODY>
</HTML>
<?php
mysql_close($conexao);
?> 