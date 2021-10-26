<?php  

$total = 5;
$desconto = 0.90;

do {
    $total *= $desconto;
} while ($total > 100);

echo $total;

?>