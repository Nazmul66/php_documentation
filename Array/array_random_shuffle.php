<?php 
  $number = range(0, 32); 

  // mt_rand() or rand() could be generate random numbers
  $random = mt_rand(0, 32);
  echo $number[$random];

  // shuffle() could be generate whole array to shuffle
  shuffle($number);
  print_r($number);
?>