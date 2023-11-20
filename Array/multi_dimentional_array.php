<?php
     $perishable = array(
        "vegetables" => explode(", ", "Brinjel, cauliflowers, peas , carrot"),
        "fruits" => preg_split("/(, |,)/", "apple, banana, grapes, jack-fruit,orange"),
        "drinks" => explode(", ", "aguafina, pepsi, coca-cola")
    );

    array_push($perishable["vegetables"], "tomato");

    // print_r($perishable);

    $find = $perishable["drinks"][2];
    // echo $find;

    // echo $perishable["fruits"][1] . $perishable["fruits"][2];
    // printf("Fruit collection are %s %s",$perishable["fruits"][1] , $perishable["fruits"][2]);

    // this serilize convert to as like json but it called peculiar string 
    $serialized = serialize($perishable);
    // echo $serialized;
    $unSerialized = unserialize($serialized);
    // print_r ($unSerialized);

    // array convert to JSON format
    $convertToJson = json_encode($perishable);
    // echo $convertToJson;

    // JSON format convert to associative array and definitely convert to associative array just add true boolean value (2nd argument)
    $JsonToArray = json_decode($convertToJson, true);
    print_r($JsonToArray);
?> 