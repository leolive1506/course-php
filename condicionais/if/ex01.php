<?php 

$idade = 11;

$idadeCrianca = 12;
$maiorIdade = 18;
$idadeIdoso = 60;

if ($idade < $idadeCrianca) {
    echo "Criança";
} else if ($idade < $idadeMaior && $idade > $idadeCrianca) {
    echo "Adolecente";
} else if ($idade < $idadeIdoso) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";

echo ($idade < $maiorIdade) ? "Menor de Idade" : "Maior de Idade"

?>