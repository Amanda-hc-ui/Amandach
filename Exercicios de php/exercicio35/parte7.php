<?php
function calculaImposto($cpf, $dependentes, $rendaMensal) {

    $salarioMinimo = 1412; // valor de exemplo, altere se necessário

    // Desconto por dependente
    $desconto = $dependentes * (0.05 * $salarioMinimo);
    $rendaLiquida = $rendaMensal - $desconto;

    // Determinar alíquota
    if ($rendaLiquida <= 2 * $salarioMinimo) {
        $aliquota = 0;
    } elseif ($rendaLiquida <= 3 * $salarioMinimo) {
        $aliquota = 0.05;
    } elseif ($rendaLiquida <= 5 * $salarioMinimo) {
        $aliquota = 0.10;
    } elseif ($rendaLiquida <= 7 * $salarioMinimo) {
        $aliquota = 0.15;
    } else {
        $aliquota = 0.20;
    }

    $imposto = $rendaLiquida * $aliquota;

    return [
        "cpf" => $cpf,
        "dependentes" => $dependentes,
        "renda_liquida" => $rendaLiquida,
        "aliquota" => ($aliquota * 100) . "%",
        "imposto" => $imposto
    ];
}
?>
