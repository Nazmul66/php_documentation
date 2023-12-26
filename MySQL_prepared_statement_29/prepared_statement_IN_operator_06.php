<?php
define("DB_Name", "school_management_db");
define("DB_Host", "localhost");
define("DB_User", "root");
define("DB_Password", "");

// create sql CONNECTION
$mysqli = new mysqli(DB_Host, DB_User, DB_Password, DB_Name);

$stmt = $mysqli->prepare("SELECT name, section FROM students WHERE class = ? AND section IN (?, ?) ");

$class = 2;
$section1 = "A";
$section2 = "C";

$stmt->bind_param('iss', $class, $section1, $section2);
$stmt->execute();

$result = $stmt->get_result();

// 1st way to get students data
while( $row = $result->fetch_assoc() ){
   print_r($row);
}


?>