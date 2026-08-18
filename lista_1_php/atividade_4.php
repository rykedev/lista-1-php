<?php

// ATIVIDADE 4: Processamento de Vetor de Notas

$notas = [7.5, 8.0, 4.5, 9.0, 6.0]; // Vetor com as 5 notas da turma

$soma = 0;
$maiorNota = $notas[0];
$menorNota = $notas[0];

for ($i = 0; $i < count($notas); $i++) {
    $soma += $notas[$i];

    if ($notas[$i] > $maiorNota) {
        $maiorNota = $notas[$i];
    }

    if ($notas[$i] < $menorNota) {
        $menorNota = $notas[$i];
    }
}

$media = $soma / count($notas);

echo "Média da turma: " . $media . "<br>";
echo "Maior nota: " . $maiorNota . "<br>";
echo "Menor nota: " . $menorNota . "<br>";

?>