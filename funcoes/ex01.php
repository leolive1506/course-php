<?php 

function ola() {
    echo "Olá mundo!<br>";
}

function ola2() {
    return "Olá mundo!<br>";
}

ola();
echo ola2();

$frase = ola2();

echo $frase;
echo strlen($frase);

?>