<?php

spl_autoload_register(function($nameClass) {
  // var_dump($nameClass);

    // a pasta em que deve procurar as class
    $dirClass = "class";


    //  todo nome do arquivo, inclusive suas pastas
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";


    if(file_exists($filename)) {
        require_once($filename);
    }
})

?>
