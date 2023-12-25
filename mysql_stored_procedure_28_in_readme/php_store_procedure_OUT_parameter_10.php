<?php
define("DB_Name", "school_management_db");
define("DB_Host", "localhost");
define("DB_User", "root");
define("DB_Password", "");

$conn = mysqli_connect(DB_Host, DB_User, DB_Password, DB_Name);
mysqli_query($conn, "CALL get_BG_class(2, 'a', @TB, @TG);");
$result = mysqli_query($conn, "SELECT @TB AS TotalBoys, @TG AS TotalGirls");

echo mysqli_num_rows($result);

 while ($row = mysqli_fetch_assoc($result)){
    print_r($row);
 }


?>