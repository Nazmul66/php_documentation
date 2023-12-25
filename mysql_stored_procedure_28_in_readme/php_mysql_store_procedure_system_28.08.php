<?php
define("DB_Name", "school_management_db");
define("DB_Host", "localhost");
define("DB_User", "root");
define("DB_Password", "");

$conn = mysqli_connect(DB_Host, DB_User, DB_Password, DB_Name);
$result = mysqli_query($conn, "CALL get_students_class_and_section(2, 'a');");
echo mysqli_num_rows($result);
 while ($row = mysqli_fetch_assoc($result)){
    print_r($row);
 }

?>