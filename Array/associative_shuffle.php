<?php 
    // associative array shuffle method to random keys data
    $random = array("a" => "apple","c" => "zat",  "b" => "ball",  "d" => "dog", "e" => "egg");
    $key = array_rand($random);
    echo $key;

    // if we use the rand function to randomize associative arrays, there could be a problem bcz keys data could be changed ,
    shuffle($random);
    print_r($random);
?>