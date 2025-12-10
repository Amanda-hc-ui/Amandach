<?php
function tabelaAluno($nome) {
    echo "
    <table border='1' cellpadding='5'>
        <tr><th colspan='2'>ESCOLA TÉCNICA DE BRASÍLIA – ETB</th></tr>
        <tr><td>Curso Básico:</td><td>PHP</td></tr>
        <tr><td>Turno:</td><td>Matutino</td></tr>
        <tr><td>Turma:</td><td>3124</td></tr>
        <tr><td>Aluno:</td><td>$nome</td></tr>
    </table>
    ";
}
?>
