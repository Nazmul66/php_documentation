<?php
 
 // string convert to array 
 // delimeter

  $drinks = "pepsi, coca-cola, 7up , mojo";
  $stringToArray = explode(", ", $drinks);
    // print_r($stringToArray);

  // array to string conversion
  $arrayToString = join(", ", $stringToArray);
    echo $arrayToString;

  // array to string conversion (alternative part of join method)
  $arrayToString2 = implode(" ", $stringToArray);
  // echo $arrayToString2;

  // multiple delimiter to explode or array to string conversion
  $vegetables = "Brinjel, cauliflowers, peas , carrot,chick peas,tomato";
  $preg_split = preg_split("/(, |,)/", $vegetables);
  // print_r($preg_split);

?>