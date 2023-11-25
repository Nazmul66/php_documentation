<?php 
   $originKey = "abcdefghijklmnopqrstuvwxyzABCDEF1234567890";
   $originalData = "love the sign";

   $StringLength = strlen($originalData);

   for ($i=0; $i < $StringLength; $i++) { 
      $currentValue = $originalData[$i];
    //   echo $currentValue;
      $position = strpos($originKey, $currentValue);
      echo $position;

   }

?>