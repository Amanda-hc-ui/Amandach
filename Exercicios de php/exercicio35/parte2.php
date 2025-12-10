<?php
function criaTabela($linhas, $colunas, $conteudo) {
    echo "<table border='1' cellpadding='5'>";
    for ($i = 0; $i < $linhas; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $colunas; $j++) {
            echo "<td>$conteudo</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
