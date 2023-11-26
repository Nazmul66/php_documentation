<?php 
   $fileName = "C:/xampp/htdocs/php/files_7/file/files2.txt";

//    $fp = fopen($fileName, "r+");
// $fp = fopen($fileName, "w+");
// $fp = fopen($fileName, "a+");
   $line = fgets($fp);
   echo $line;
   fwrite($fp, "uranus");
   $line = fgets($fp);
   echo $line;
   fclose($fp);
?>