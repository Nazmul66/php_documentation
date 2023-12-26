<?php

$PDO = new PDO("mysql:host=localhost;port=3306;dbname=school_management_db;charset=UTF8;",'root','');

// set PDO default fetch mode
$PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 

if($PDO){
    $stmt = $PDO->prepare("SELECT * FROM students WHERE class=? AND section=? ");

   // set PDO default fetch mode
   $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 

    // 1st method of execute prepare statement
    /*  $class = 1;
        $section = "A";
        $stmt->bindParam(1,$class,PDO::PARAM_INT);
        $stmt->bindParam(2,$section,PDO::PARAM_STR);
        $stmt->execute(); */

    // 2nd method of execute prepare statement without bind parameter
    $stmt->execute([1, "A"]);
    print_r($stmt->fetchAll());
}


?>