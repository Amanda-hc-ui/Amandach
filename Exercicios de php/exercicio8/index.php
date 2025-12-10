<?php
$login = $_POST["txtLogin"];
$senha = $_POST["txtSenha"];
if($login == NULL || $senha == NULL) {
 print "Login e/ou senha inválida!";
 exit();
}
print "Dados de acesso OK!";
?>
