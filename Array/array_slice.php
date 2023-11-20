<?php 
  $array = array("apple", "orange", "plum", "mango", "seagreen", "papaya");

//   $someFruits = array_slice($array, 0, 4);
//   $someFruits = array_slice($array, 2,4 );
//   $someFruits = array_slice($array, 2, -1);
//   $someFruits = array_slice($array, -5, -1);
//   $someFruits = array_slice($array, 1);
//   $someFruits = array_slice($array, -5);

  // it will gives you a list of key value pairs that give you the current index key data  
  $someFruits = array_slice($array, -5, -1, true);
  print_r($someFruits);

  // associative array slice method
//   $random = array("a" => "apple", "b" => "ball", "c" => "cat", "d" => "dog");

  // when associative array have preserve keys without 
  $random = array("a" => "apple", "b" => "ball", "c" => "cat", "d" => "dog", 10 => 12, "e" => "egg");
  $randomData = array_slice($random, 2, null, true);
  print_r($randomData);
?>