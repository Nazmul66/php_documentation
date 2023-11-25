<?php
    $string = "hello world";

    //php 3 way can string reverse way

   // first way to reverse 
    $length = strlen($string);
      for ( $i=$length-1; $i >= 0; $i-- ){
        echo $string[$i];
    }

    echo PHP_EOL;

    // second way to reverse 
    for ( $i= 1; $i <= $length; $i++ ){
       echo $string[$i * -1];
    }

    echo PHP_EOL;

    // third way to reverse 
    echo strrev($string);
?>