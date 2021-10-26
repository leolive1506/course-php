<?php

require_once("config.php");
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sendeaux");
$cad->setEmail("email@gmail.com");
$cad->setSenha("1234");

echo $cad;

$cad->registrarVenda();

?>
