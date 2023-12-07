<?php 

  // Associative array representation
    
    $age = array(
        "20" => "kabir",
        "19" => "shahil",
        "28" => "onil",
        "26" => "nazmul"
    );

    $perishable = array(
        "vegetables" => "Brinjel, cauliflowers,peas , carrot",
        "fruits" => "apple, banana, grapes, jack-fruit, orange",
        "drinks" => "aguafina, pepsi, coca-cola"
    );

    // print_r($age[20]);
    // print_r($perishable["drinks"]);

    // change associative array data
    $perishable["drinks"] = $perishable["drinks"].", fanta, 7Up";
    
    // shortcut way to change associative array data
    $perishable["drinks"] .= ", fanta, 7Up";

    // Associative array loop method
     foreach ($age as $value){
        // echo $value;
     }

    foreach($perishable as $keys => $values){
    //    echo $keys . " => " . $values;
    }

    // to get array's key methods given below
    $break_key = array_keys($age); 
    $break_key2 = array_keys($perishable); 
    // print_r($break_key);
    // print_r($break_key2);

    // to get array's value methods given below
    $array_values = array_values($age);
    $array_values2 = array_values($perishable);
    // print_r($array_values);
    // print_r($array_values2);

    // another way loop associative array loop method
     $keys = array_keys($perishable);
     for($i=0; $i<count($keys); $i++){
        $key = $keys[$i];
        // echo $perishable[$key];
     }

     $values = array_values($perishable);
     for($i=0; $i<count($values); $i++){
         $value = $values[$i];
        //  echo $value;
     }

     print_r($perishable);

?>