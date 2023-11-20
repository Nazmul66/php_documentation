<?php 
    $perishable = array(
        "vegetables" => explode(", ", "Brinjel, cauliflowers, peas , carrot"),
        "fruits" => preg_split("/(, |,)/", "apple, banana, grapes, jack-fruit,orange"),
        "drinks" => explode(", ", "aguafina, pepsi, coca-cola")
    );

    print_r($perishable);

    // remove associative index data
    unset($perishable["drinks"]);

    print_r($perishable);
?>