<?php

$PDO = new PDO("mysql:host=localhost;port=3306;dbname=school_management_db;charset=UTF8;",'root','');

// set PDO default fetch mode
$PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 

if($PDO){
    $stmt = $PDO->prepare("SELECT sex, name, roll FROM students WHERE class=? AND section=? "); 

    $stmt->execute([1, "A"]);
    $result = $stmt->fetchAll(PDO::FETCH_GROUP);
    // print_r($result);
    echo "total Male" . count($result["B"]);
}


?>