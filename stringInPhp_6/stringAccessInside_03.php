<?php
   $string = "hello world";

   $string14 =  $string[0];
   echo $string14;

   $string14 =  $string[-3];
   echo $string14 . "\n";

   // get string length
   $str_length = strlen($string);
   echo $str_length . "\n";

   // some specify string cut data
   $stringBreak =  substr($string, 1 , 4);
   echo $stringBreak . "\n";

   $stringBreak2 =  substr($string, -3);
   echo $stringBreak2 . "\n";

   $stringBreak3 =  substr($string, -3, 2);
   echo $stringBreak3 . "\n";

   $stringBreak4 =  substr($string, -5, -1);
   echo $stringBreak4;

?>