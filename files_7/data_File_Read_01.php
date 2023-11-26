<?php
  // current file path directory get ( go to terminal => type pwd => then current path direvtory show )
  $files = "C:/xampp/htdocs/php/files_7/file/files.txt";

  if(is_readable($files)){
  $fp = fopen($files, "r");

  // $line = fgets($fp);
  // echo $line;

  // loop it to get all files data
  while( $line = fgets($fp)){
    echo $line;
  }

  // unwind is to recalled the $fp file to the beginning
  // rewind($fp);

  // fseek is to tell about which cursor position to start file readable
  // fseek($fp,8);

  rewind($fp);
  fseek($fp, -1, SEEK_END);

  while( $line = fgets($fp,5)){
    echo $line. "-";
  }
  fclose($fp);

  // (file) function give you all data, all of those data is wrapped in array format
  $data = file($files);
  print_r($data);

  echo PHP_EOL;

  // (file_get_contents) function give you all data
  $data2 = file_get_contents($files);
  echo $data2;

}


?>