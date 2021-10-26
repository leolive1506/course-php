<?php

spl_autoload_register(function ($fileClass) {
    $dirClass = "class";

    $filename = $dirClass . DIRECTORY_SEPARATOR . $fileClass . ".php";

    if(file_exists($filename)) {
      require_once($filename);
    }
})

?>
