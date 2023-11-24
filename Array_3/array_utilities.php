<?php
   $number = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];

   // array_walk can change value but not change to original value
   function square($n){
     printf("this number is %d * %d", $n, $n*$n);
   }

   array_walk($number, 'square');

   // array_map can change the original value when data will return 
   function cube($n){
     return $n * $n * $n;
   }
   $multiple = array_map('cube', $number);
   print_r($multiple);


   // array_filter can change the original value when data will return. also work filterable
   function even($n){
        return $n % 2 == 0;
   }
   $even = array_filter( $number, 'even');
   print_r($even);

   // find that persons that name starts with (s) characters
   $persons = ["John", "elena", "smith", "kali", "alice", "shepard", "doglash"];

   function filters($person){
    //   return $person[1] == "l";
    //   return $person[0] == "k";
    return $person[3] == "n";
   }

   $newPerson = array_filter($persons, 'filters');
   print_r($newPerson);
?>