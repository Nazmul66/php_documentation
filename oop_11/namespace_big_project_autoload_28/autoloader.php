<?php

spl_autoload_register(function ($className) {
    // echo $className . "\n";
    $path = strtolower(str_replace("CloudStorage\\", "", $className)).".php";
    // $pathName = str_replace("\\", "/", $path);
    $pathName = str_replace("\\", DIRECTORY_SEPARATOR, $path); // or use this DIRECTORY_SEPARATOR instead of "/"
    include ($pathName);
    echo $pathName . "\n";

});

?>