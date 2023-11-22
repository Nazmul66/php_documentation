<?php 

    // method 1 --->
    $numbers = [15, 18, 24, 89, 46, 75, 26]; 
    //  or  $numbers = [15, 18, 24, 89, "46", 75, 26];

    // To check array using in_array
    if(in_array(46, $numbers)){
    //    echo "yes you  found";  // answer 
    }
    else{
        // echo "no, you won't found";
    }

    // method 2 --->
    $numbers2 = [15, 18, 24, 89, "46", 75, 26];

    // To check array using in_array when 3rd parameter, it will be checked for typed values
    if(in_array(46, $numbers2, true)){
        // echo "yes you  found";
     }
     else{
        //  echo "no, you won't found"; // answer 
     }

    // method 3 --->
    // to find array data index value using array_search function
    $numbers3 = [15, 18, 24, 89, "46", 75, 26];

    $offsetArray = array_search(46, $numbers3);
    echo $offsetArray; // answer is : (index) -> 4

    // method 4 --->
    $random = array("a" => "apple","c" => "zat",  "b" => "ball",  "d" => "dog", 12, "e" => "egg");

    // to find array data index key using key_exists function for associative array
     $array_key = key_exists("c", $random);
    //  echo $array_key; // answer is : (index) -> 1
?>