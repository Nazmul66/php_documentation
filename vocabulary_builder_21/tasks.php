<?php
   include "config.php";

//   $action = isset($_POST['action']) ? $_POST['action'] : "";
  $action = $_POST['action'] ?? "";

  if(!$action){
     throw new Exception("there is not data found");
  }
  else{
     if("register" == $action){
        echo $action;
        $email      = $_POST['email'];
        $password   = $_POST['password'];

        $hash = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users(email, password) VALUES('$email', '$hash')";
        $dataStore = mysqli_query($connection, $query); 

        //NOTE: mysqli error result won't show
        if( $dataStore === false ){
             echo "Error: " . mysqli_error($connection);
        }
        // header("location: index.php");
     }
  }



?>