<?php
   $fileName = "C:/xampp/htdocs/php/files_7/file/files2.txt";

if(is_writable($fileName)){
    // get all previous saving data
    // $existingData = file_get_contents($fileName);

    // write a new data on txt file can use 'w' word
       $fp = fopen($fileName, "w");
 
    // this "a" word should append new data when we save the data files 
 //    $fp = fopen($fileName, "a");
 
    //  fwrite($fp, $existingData);
     fwrite($fp, "mercury\n");
     fwrite($fp, "venus\n");
     fwrite($fp, "earth\n");
     fclose($fp);
}


?>