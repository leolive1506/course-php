<?php 

require_once("config.php");

session_unset($_SESSION['nome']); // apaga a session, se não definida qual variavel apagar apaga tudo
echo $_SESSION['nome'];
// cria a session no arquivo ex01.php 
// se abrir esse primeiro não vai retornar nada pois não foi criado no nome ainda

session_destroy();
// session_unset() apaga os dados mas não o usuario
// session_destroy() apaga tudo como se fosse um novo usuario
?>