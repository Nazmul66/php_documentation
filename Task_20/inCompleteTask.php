<?php
   include "./config.php";

   $inComplete = isset($_GET['incomplete']) ? $_GET['incomplete'] : "";

   if(!$inComplete){
     header("location: index.php");
   }
   else{
    echo $inComplete;

    $incompleteQuery = "UPDATE task SET complete=0 WHERE id='$inComplete' ";
    echo $incompleteQuery; 
    $incompleteData = mysqli_query($connection, $incompleteQuery);
    header("location: index.php");
   }

?>