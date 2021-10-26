<?php 

// $_GET - array super global - vai pegar todas as variaveis que recebeu atraves da Url
$nome = (int)$_GET["variavel"];

// var_dump($nome);

echo "<br/>";
echo $nome;

$ip = $_SERVER["REMOTE_ADDR"];
echo "<BR/>";
echo $ip;

$script = $_SERVER["SCRIPT_NAME"];
echo "<BR/>";
echo $script;

?>