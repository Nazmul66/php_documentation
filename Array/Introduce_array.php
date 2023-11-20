<?php
    // php array method
    $student = array("rahin", "rashed", "onil", "daisy", 20);
    var_dump($student);

    // php array method like javascript array can be used also
    $student2 = ["rahin", "rashed", "onil", "daisy", 20];
    var_dump($student2);

    // array count data
    echo count($student);

    // loop array data
   for($i=0; $i < count($student); $i++){
      echo $student[$i] . "\n";
   }
?>