<?php

// ATIVIDADE 5: Função para Cálculo e Classificação de IMC

function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    
    if ($imc < 18.5) {
        $classificacao = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 25.0) {
        $classificacao = "Peso normal";
    } elseif ($imc >= 25.0 && $imc < 30.0) {
        $classificacao = "Sobrepeso";
    } else {
        $classificacao = "Obesidade";
    }

    return "IMC: " . number_format($imc, 2) . " - Classificação: " . $classificacao;
}

// Valores de exemplo para teste
$pesoExemplo = 75.0;
$alturaExemplo = 1.75;

echo calcularIMC($pesoExemplo, $alturaExemplo) . "<br>";

?>