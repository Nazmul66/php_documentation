<?php
   function indexKey ($data){
     printf("value = '%s' ", $data);
   }

   function OriginalData ($originalData, $key){
      $originKey = "abcdefghijklmnopqrstuvwxyzABCDEF1234567890";
      $data = "";
      $length = strlen($originalData);

      for ($i=0; $i < $length; $i++) { 
        $currentData = $originalData[$i];
        $position = strpos($originKey, $currentData);
        if( $position !== false ) {
          $data .= $key[$position];
        }
        else{
          $data .= $currentData;
        }
     }

     return $data;
   }

   function decodeData ($originalData, $key){
    $originKey = "abcdefghijklmnopqrstuvwxyzABCDEF1234567890";
    $data = "";
    $length = strlen($originalData);

    for ($i=0; $i < $length; $i++) { 
      $currentData = $originalData[$i];
      $position = strpos($key, $currentData);
      if( $position !== false ) {
        $data .= $originKey[$position];
      }
      else{
        $data .= $currentData;
      }
   }
   return $data;
 }
?>