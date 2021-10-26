<?php 

$condicao = true;

while ($condicao) {
    $numero = rand(1, 10);

    if ($numero === 3) {
        echo "Número 3!";
        $condicao = false;
    } else {
        echo "Seu número foi: $numero tente novamente";
    }
}

?>