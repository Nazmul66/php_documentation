<?php 

  $array = array("apple", "orange", "plum", "mango", "seagreen", "papaya");
  $random = array("a" => "apple", "b" => "ball", "c" => "cat", "d" => "dog", 10 => 12, "e" => "egg");

    // clear the existing associative array remove from the main array data
    $newArray = array("oregano", "blue berry");

    //  added new array on splice data array
    // $randomData = array_splice($array, 2, 2, $newArray);
    // print_r($randomData);
    // print_r($array);



  // clear the existing array remove from the main array data
  $randomData = array_splice($random, 2, 2);
  print_r($randomData);
  print_r($random);

?>