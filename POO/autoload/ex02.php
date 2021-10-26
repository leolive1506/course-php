<?php 

function incluirClasses($nomeClasse) {
    // file_exists - verifica se arquivo existe, retorna true or false
    if(file_exists($nomeClasse.".php") == true) {
        require_once($nomeClasse.".php");
    }
}

// passando nome da função
spl_autoload_register("incluirClasses"); // verifica dentro do diretório

// passando a função como argumento 
spl_autoload_register(function($nomeClasse) {

    if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") == true) {
        require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }

});

$carro = new DelRey();
$carro->acelerar(80);

?>