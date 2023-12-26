<?php
define("DB_Name", "school_management_db");
define("DB_Host", "localhost");
define("DB_User", "root");
define("DB_Password", "");

// create sql CONNECTION
$mysqli = new mysqli(DB_Host, DB_User, DB_Password, DB_Name);

$stmt = $mysqli->prepare("SELECT count(*) FROM students WHERE class = ? AND section = ? ");

$class = 2;
$section = "A";

$stmt->bind_param('is', $class, $section );
$stmt->execute();

$result = $stmt->get_result()->fetch_row();
echo $result[0];
