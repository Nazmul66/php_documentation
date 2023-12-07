<?php 

   // what kind of value will show, it wll gives the result of true value 
    // $name = ""; $name = 0; $name = -15; $name = "data";

    if(isset($name)){
        echo "found it";
    }
    else{
        echo "not found it";
    }


     // when the data will empty, it wll gives the result of false value and  value have its give you true value
    $data = "";

    if(empty($data)){
       echo "true";
    }
    else if(!empty($data)){
        echo "false";
    }

?>