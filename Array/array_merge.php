<?php

  $vegetables = array("apple", "orange", "plum", "mango", "seagreen", "papaya");
  $array1 = array_slice($vegetables, 0, 3);
  $array2 = array_slice($vegetables, 3, null, true);

   print_r($array1);
   print_r($array2);

   //  $arrayFull = array_merge($array1, $array2);
   $arrayFull = $array1 + $array2;
   print_r($arrayFull);

?>