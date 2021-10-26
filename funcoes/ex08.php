<?php 

function soma(int ...$valores): string {
    return array_sum($valores);
}


echo var_dump(soma(2, 2));
echo "<br>";

echo var_dump(soma(25, 33));
echo "<br>";

echo var_dump(soma(1.5, 3.2)); // cm so recebe números inteiros ignora o numero após o número flutuante
echo "<br>";



?>