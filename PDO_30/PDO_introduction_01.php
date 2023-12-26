<?php

$PDO = new PDO("mysql:host=localhost;port=3306;dbname=school_management_db;charset=UTF8;",'root','');
 
if($PDO){
    $stmt = $PDO->query("SELECT * FROM students WHERE class=1 AND section='B'");
    print_r($stmt->fetch(PDO::FETCH_NUM));
    // print_r($stmt->fetch(PDO::FETCH_COLUMN));
    // print_r($stmt->fetch(PDO::FETCH_ASSOC));
}


?>
