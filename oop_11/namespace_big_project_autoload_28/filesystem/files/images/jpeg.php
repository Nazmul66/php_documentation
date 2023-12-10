<?php
namespace CloudStorage\FileSystem\Files\Images;

use \CloudStorage\FileSystem\Files\Contracts\ImageContracts as ImageContracts;

class JPEG extends ImageContracts{
    function getDimension (){
        return "100*100";
    }
}
?>

// Dependency Injection