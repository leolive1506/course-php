<?php 

function __autoload($nameClass) {
    // var_dump($nameClass);
    require_once("$nameClass.php");
}

$carro = new DelRey();
$carro->acelerar(80);
?>