<?php
define("DB_Name", "school_management_db");
define("DB_Host", "localhost");
define("DB_User", "root");
define("DB_Password", "");

// create sql CONNECTION
$mysqli = new mysqli(DB_Host, DB_User, DB_Password, DB_Name);

$stmt = $mysqli->prepare("SELECT * FROM students WHERE name LIKE ? ");


$like = '%br%'; 

$stmt->bind_param('s', $like);
$stmt->execute();

$result = $stmt->get_result();

// 1st way to get students data
while( $row = $result->fetch_assoc() ){
   print_r($row);
}



?>