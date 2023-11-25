<?php
  $string = "Quick Brown brown Fox fox jumps over the lazy dog";

    // str_replace, it used for replace the current character and also case (sensitive)
    $replace = str_replace("brown", "red", $string);
    echo $replace . "\n";
    
    echo PHP_EOL;

    // str_replace, it used for replace the current character nd also case (insensitive)
    $replace2 = str_ireplace("Brown", "red", $string);
    echo $replace2;

    
    echo PHP_EOL;

    // how many characters are change in the string, can be countable data executed 
    $replace3 = str_ireplace("Brown", "red", $string, $count);
    echo $replace3 . "\n" . $count;

    // str_replace, it used for replace the multiple current character and also case (sensitive)
    $replace3 = str_replace(array("Brown", "fox", "dog"), array("red", "dox", "hen"), $string, $count);
    // echo $replace3 . "\n" . $count;

    // str_replace, it used for replace the multiple current character and also case (insensitive)
    $replace4 = str_ireplace(array("Brown", "fox"), array("red", "dox"), $string, $count);
    echo $replace4 . "\n" . $count;

  echo PHP_EOL;


?>