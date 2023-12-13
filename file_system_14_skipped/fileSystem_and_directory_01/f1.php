<?php

// echo getcwd();  // cwd mean Current working directory to see which directory right now

// get all directories and files are available right now
$entries = scandir(getcwd()); // to detect all folders directory
// print_r($entries);  
foreach($entries as $entry){
   if( "." != $entry && ".." != $entry ){
        if( is_dir($entry) ) {
           echo "[D] {$entry} \n";
        }
        else {
            echo "[F] {$entry} \n";
         }
   }
}

// count to get how many directories and files are available right now
function countDir ($entryDir) {  
    $entries = scandir($entryDir);
    $count = 0;
    foreach($entries as $entry){
        if( "." != $entry && ".." != $entry ){
             if( is_dir($entry) ) {
                $count++;
             }
        }
     }

     return $count;
}

echo countDir(getcwd());

?>