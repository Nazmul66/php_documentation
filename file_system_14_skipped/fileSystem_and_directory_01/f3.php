<?php

class Dir{
    private $directories = [];
    private $files = [];

    function __construct($path){
        $entries = scandir($path);
        foreach($entries as $entry){
            if( "." != $entry && ".." != $entry){
                if( is_dir($entry) ){
                   array_push($this->directories, $entry);
                }
                else{
                    array_push($this->files, $entry);
                }
            }
        }
    }

    function getDirectories() {
       return $this->directories;
    }

    function getFiles() {
        return $this->files; 
    }

}

$dir = new Dir(getcwd());
$direct = $dir->getDirectories();
$files = $dir->getFiles();

print_r($direct);
print_r($files);


?>