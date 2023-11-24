<?php 

   // sort, asort, rsort, ksort, krsort
    // $vegetables = array("apple", "orange", "plum", "mango", "seagreen", "papaya");
    $random = array("a" => "apple","c" => "zat",  "b" => "ball",  "d" => "dog", 12, "e" => "egg");
    $numbers = [15, 18, 24, 89, 46, 75, 26];

    // ASC sort by using php sort method
    // sort($numbers);
    // sort($vegetables);

    // ASC sort by using php asort method for array value found
    // asort($random);

    // reverse sort by using php arsort method normal array or associative array could be used values bigger then smaller values
    // rsort($numbers);

    //  keys ASC sorting using by ksort method only associative array 
    // ksort($random);

    // keys DSC sorting using by krsort method only associative array 
    // krsort($random);

    print_r($random);
?>