<?php
define("DB_Name", "school_management_db");
define("DB_Host", "localhost");
define("DB_User", "root");
define("DB_Password", "");

// create sql CONNECTION
$mysqli = new mysqli(DB_Host, DB_User, DB_Password, DB_Name);

// then prepared statement of SQL
$stmt = $mysqli->prepare("SELECT * FROM students WHERE class=? AND section=? ORDER BY section ASC");
$class = 1;
$section = "A";

// bind_param to set all sql vvalues 
$stmt->bind_param('is', $class, $section );

// then execute statement
$stmt->execute();

// also get the result from database
echo $stmt->get_result()->num_rows;

$class = 4;
$section = "B";
$stmt->execute();

echo $stmt->get_result()->num_rows;

$stmt->close();


?>