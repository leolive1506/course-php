<?php

require_once("config.php");

$cad = new Cadastro;
$cad->setName("Arroz");
$cad->setEmail("arroz@gmai.com");
$cad->setPassword("arrozinho do grau");
echo $cad;

?>
