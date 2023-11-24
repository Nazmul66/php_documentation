<?php 
 $number1 = array(57, 1, 5, 54, 7, 81, 2, 9);
 $number2 = array(88, 3, 21, 44, 22, 28, 9, 81 );
 
 $array1 = array("a" => "apple", "b" => "banana", "c" => "cat");
 $array2 = array("d" => "dog", "e" => "egg", "f" => "fog", "a" => "apple");

  // first array will check which elements are same into the 2nd array that they are same. then the same data will be returned 
  $common = array_intersect($number1, $number2);
  print_r($common);

  // first array will check which elements are same into the 2nd array that they are same. then the same data will be returned but it will check the only values
  $common1 = array_intersect($array1, $array2);
  print_r($common1);

  // in associative array, i need to check both values and keys 
  $common2 = array_intersect_assoc($array1, $array2);
  print_r($common2);

  // array_diff is use to be which elements are not same, existing different data will you  
  $diff = array_diff($number1, $number2);
  print_r($diff);

    // array_diff is use to be which elements are not same, existing different data will you but associative array will give the only values 
    $diff2 = array_diff($array2, $array1);
    print_r($diff2);

    // array_diff_assoc will check the both keys and value that they are will not same, they will give you existing data
    $diff3 = array_diff_assoc($array2, $array1);
    print_r($diff3);

?>