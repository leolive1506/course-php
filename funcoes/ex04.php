<?php 

function ola(){ 
    $arg = func_get_args();
    return $arg;
}

var_dump(ola("Bom dia", "zummm"));
var_dump(ola("Bom dia"));


?>