<?php

// 2 way database can be connected

 $DB_Name = "tasks";
 $DB_User = "root";
 $DB_Password = "";
 $DB_Host = "localhost";

//  define("DB_Name", "tasks");
//  define("DB_User", "root");
//  define("DB_Password", "");
//  define("DB_Host", "localhost");

 $connection = mysqli_connect( $DB_Host, $DB_User, $DB_Password, $DB_Name);
// $connection = mysqli_connect( DB_Host, DB_User, DB_Password, DB_Name);

 if(!$connection){
    throw new Exception("database is not connected");
 } 
 else{
   //  echo "database is connected";
 }

?>