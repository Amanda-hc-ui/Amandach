<?php
//validarSenha: imprime mensagem de senha válida ou inválida
function validarSenha ($senha, $senhaConfirmacao)
{
 if ($senha == $senhaConfirmacao)
 {
 print "<P>Senha ok. Obrigado.</P>";
 }
 else
 {
 print "<P>Senhas não confere. Por favor, tente novamente.</P>";
 }
}
?>
<HTML>
<BODY>
<?php
//parâmetros advindos de um formulário
$senha1 = $_POST["senha1"];
$senha2 = $_POST["senha2"];
print "Primeira senha: " . $senha1 . "<BR/>";
print "Segunda senha: " . $senha2 . "<BR/>"; 
validarSenha($senha1, $senha2); //chamada ou uso da função
validaSenha
?>
</BODY>
</HTML> 
