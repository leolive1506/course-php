<?php 

function ola($text, $periodo = "Bom dia") {
    return "Olá $text! $periodo<br>";
}
// paramentros obrigatorios sempre a esquerda

echo ola("Mundo");
echo ola("Leo");
echo ola("João", "Boa noite");

?>