<?php
define("DB_Name", "school_management_db");
define("DB_Host", "localhost");
define("DB_User", "root");
define("DB_Password", "");

// create sql CONNECTION
$mysqli = new mysqli(DB_Host, DB_User, DB_Password, DB_Name);

$stmt = $mysqli->prepare("SELECT * FROM students WHERE class=? AND section=? ORDER BY section ASC");

$class = 1;
$section = "A"; 
$stmt->bind_param('is', $class, $section );
$stmt->execute();

$result = $stmt->get_result();

// 1st way to get students data
while( $row = $result->fetch_assoc() ){
   print_r($row);
}



?>