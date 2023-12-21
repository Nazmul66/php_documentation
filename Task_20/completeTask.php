<?php
   include "./config.php";

   $complete = isset($_GET['complete']) ? $_GET['complete'] : "";

   if(!$complete){
     header("location: index.php");
   }
   else{
    echo $complete;

    $completeQuery = "UPDATE task SET complete=1 WHERE id='$complete' ";
    // echo $completeQuery; 
    $completeData = mysqli_query($connection,$completeQuery);
    header("location: index.php");
   }

?>