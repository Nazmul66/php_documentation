<?php
   include "./config.php";

   $delete = isset($_GET['delete']) ? $_GET['delete'] : "";

   if(!$delete){
     header("location: index.php");
   }
   else{
    echo $delete;

    $deleteQuery = "DELETE FROM task WHERE id=$delete ";
    // echo $deleteQuery; 
    $deleteData = mysqli_query($connection,$deleteQuery);
    header("location: index.php");
   }

?>