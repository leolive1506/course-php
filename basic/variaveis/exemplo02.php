<?php 

// $anoNascimento = 1990;
// $anoCompleto = "";
// $1nome = "" // não pode começar com numeros

$nome1 = "João";
$sobrenome = "Rangel";

// contatenar
$nomeCompleto = $nome1." ".$sobrenome;

echo($nomeCompleto);

exit;

echo $nome1;
echo "<br/>";

// apaga variavel
unset($nome1);

// isset = is set == se existir
if (isset($nome1)) {
    echo ($nome1);
}
?>