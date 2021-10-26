<?php 

function salario($value) {
    return 946.00 * $value;
}

$valueWage = 3;
$FinishValueWage = salario($valueWage);

echo "José recebeu $valueWage salários que corresponde a: $FinishValueWage "

?>