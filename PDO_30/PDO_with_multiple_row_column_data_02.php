<?php

$PDO = new PDO("mysql:host=localhost;port=3306;dbname=school_management_db;charset=UTF8;",'root','');

// set PDO default fetch mode
$PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 

if($PDO){

    $stmt = $PDO->query("SELECT * FROM students WHERE class=1 AND section='B'");
    // set PDO statement of fetch data
    // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $result = $stmt->fetchAll(PDO::FETCH_NUM);

    // without set any fetch mode just by default set attributes ( PDO::ATTR_DEFAULT_FETCH_MODE ) then ( PDO::FETCH_ASSOC ) arguments
    $result = $stmt->fetchAll();

    print_r($result);

}


?>