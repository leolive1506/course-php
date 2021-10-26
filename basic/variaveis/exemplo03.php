<?php 
// Basicos
    $name = "Hcode";
    $url = 'www.hcode.com.br';
    $year = 1990;
    $wage = 5550.99;
    $blocked = false;

// Compostos
    $frutas = array("abacaxi", "laranja", "manga");

    echo $frutas[2];
    echo "<br/>";

    // obj

    $nascimento = new DateTime();

    // var_dump($nascimento) // mostra qual o tipo

// Dados_Especiais
    $arquivo = fopen("exemplo03.php", "r");
    // var_dump($arquivo)

    $nulo = NULL;
    $vazio = ""
?>