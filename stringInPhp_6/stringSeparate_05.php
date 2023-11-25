<?php
    $string = "Hello World,World how are you";

    // episode of string to array path Link  ===> (php/array_3/stringToArray.php);
    $parts = explode(" ", $string);
    // print_r($parts);

    $join = join(" ", $parts);
    // echo $join;
    echo PHP_EOL;

    $join2 = implode(" ", $parts);
    echo $join2 . "\n";

    // str_split can break down, single string to multiple character
    $part2 = str_split($string);
    // print_r($part2);

    // get separate part by part words (object hishebe return kore)
    $part3 = strtok($string, " ,");
    while($part3 !== false){
       echo $part3 . "\n";
       $part3 = strtok(" ,");  // iterator
    }

    // it also used regular expression
    $part4 = preg_split("/( |,)/", $string);
    print_r($part4);

?>