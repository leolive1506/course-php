<?php 

$nome = "Glaucio";

function test() {

    global $nome;
    echo $nome;
    
}

test();

function test2() {

    $nome = "Jão";
    echo $nome." agora no test2";
    
}

test2()


?>