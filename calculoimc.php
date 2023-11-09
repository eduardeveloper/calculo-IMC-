<?php
function calcularIMC($imc) {
    $faixas = array(
        array('limite_inf' => 0, 'limite_sup' => 18.5, 'classificacao' => 'Magreza'),
        array('limite_inf' => 18.51, 'limite_sup' => 24.9, 'classificacao' => 'Saudável'),
        array('limite_inf' => 25.0, 'limite_sup' => 29.9, 'classificacao' => 'Sobrepeso'),
        array('limite_inf' => 30.0, 'limite_sup' => 34.9, 'classificacao' => 'Obesidade Grau I'),
        array('limite_inf' => 35.0, 'limite_sup' => 39.9, 'classificacao' => 'Obesidade Grau II'),
        array('limite_inf' => 40.0, 'limite_sup' => PHP_FLOAT_MAX, 'classificacao' => 'Obesidade Grau III')
    );

    foreach ($faixas as $faixa) {
        if ($imc >= $faixa['limite_inf'] && $imc <= $faixa['limite_sup']) {
            echo "Atenção, seu IMC é $imc, e você está classificado com " . $faixa['classificacao'] . "\n";
            return;
        }
    }
}

$valorIMC = 25.30;
calcularIMC($valorIMC);
?>
