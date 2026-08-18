<?php 

// Atividade 3 tabuada de um numero especifico 

$numero = 7; //numero escolhido para gerar a tabuada 

for ($i =1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo $numero . " x " . $i. " = " . $resultado . "<br>";
}

?>