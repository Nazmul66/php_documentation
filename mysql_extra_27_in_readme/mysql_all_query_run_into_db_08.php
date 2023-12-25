<?php
define("DB_Name", "school_management_db");
define("DB_Host", "localhost");
define("DB_User", "root");
define("DB_Password", "");

$conn = mysqli_connect(DB_Host, DB_User, DB_Password, DB_Name);

// Initialize @roll
$initQuery = "SET @roll=0;";
mysqli_query($conn, $initQuery);

$queries = [];

 for( $class=1; $class <= 10; $class++ ){
      foreach(["A","B","C","D","E"] as $section){
        // ( $queries[] ) this query like array push type similar
        $queries[] = "SET @roll=0; UPDATE students SET roll=@roll:=@roll+1 WHERE class='$class' AND section='$section';";
      }
 }


//  print_r($queries);
 $result  = mysqli_multi_query($conn, join("", $queries)); // join method use to break array style 

 // NOTE: mysqli_error kaj kore na
  if(mysqli_error($conn)){
     echo mysqli_error($conn);
  }
 



?>