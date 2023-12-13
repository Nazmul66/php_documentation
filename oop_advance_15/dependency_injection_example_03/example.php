<?php
$filePath = "C:/xampp/htdocs/php/oop_advance_15/dependency_injection_example_03/file.txt";

interface BaseStorage{
    function setFileName($fn);
    function writeData($data);
    function setMode($mode);
}

class Storage implements BaseStorage{
    private $fn;
    private $mode;

    function __construct($fn, $mode = null) {
        $this->setFileName($fn);
        $this->mode = $mode;
    }

     function setFileName($fn){
        $this->fn = $fn;
     }

    function writeData($data){
       file_put_contents($this->fn, $data, $this->mode);
    }

    function setMode($mode) {
        $this->mode = $mode;
    }
}

// class DataManager{
//     function saveData($storage, $data) { 
//         $storage = new Storage($fn);
//         $storage->writeData($data);
//     }
// }

class DataManager{
    function saveData($storage, $data){ 
        $storage->setMode(FILE_APPEND);
        $storage->writeData($data);
    }
}

$filenames = new Storage($filePath);
// $filenames->setMode(FILE_APPEND);
$DM = new DataManager();
$DM->saveData($filenames, "1 My Extra Data");


?>