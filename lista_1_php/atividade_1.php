<?php


// ATIVIDADE 1: Cálculo de Preço com Desconto

$preco = 250.00; // Valor de exemplo para teste
$quantidade = 0;

$valorTotal = $preco * $quantidade;

if ($valorTotal >= 200.00) {
    $valorTotal = $valorTotal - ($valorTotal * 0.10);
}


echo "preço original: R$" . $$valorTotal . "<br>";
echo "desconto: R$ " . $quantidade . "<br>";
echo "preço final: R$" . $preco . "<br>";

?>