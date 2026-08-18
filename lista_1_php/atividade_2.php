<?php

//Atividade 2 sistemas de Verificação de aprovação 

$media = 7.5; //valor de exemplo para teste
$falta = 10; //valor de exemplo para teste

if ($media >= 6.0 && $falta <= 15) {
    echo "status: aprovado<br>";
} else {
    echo "status: reprovado<br>";
} 

echo "media do aluno". $media . "<br>";
echo "total de faltas: ". $falta . "<br>" 

?>