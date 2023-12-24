<?php
    session_start();
   include "config.php";

//   $action = isset($_POST['action']) ? $_POST['action'] : "";
  $action = $_POST['action'] ?? "";

  if(!$action){
     throw new Exception("there is not data found");
  }
  else{
     if("register" == $action){
      //   echo $action;
        $email      = $_POST['email'] ;
        $password   = $_POST['password'];

        $hash = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (email, password) VALUES('$email', '$hash')";
        $dataStore = mysqli_query($connection, $query); 

        //NOTE: mysqli error result won't show
        if ( mysqli_error($connection) ) {
            // echo mysqli_error($connection);
             $statusCode = 1;
         }
         else{
            $statusCode = 3;
         }
        header("location: register.php?status={$statusCode}");
      //   header("location: register.php");
     }

     else if("login" == $action){
       $email      = $_POST['email'] ;
       $password   = $_POST['password'];

       if( $email && $password ){
          $queries = "SELECT * FROM users WHERE email='$email'";
          $result = mysqli_query($connection, $queries);

          if(mysqli_num_rows($result) > 0){
             $data = mysqli_fetch_assoc($result);
             $_password = $data['password'];
             $_email = $data['email'];
             $_id = $data['id'];

             if( password_verify($password, $_password) ){
               $_SESSION['id'] = $_id;
               $_SESSION['email'] = $_email;
                header("Location: allWord.php");
                die();
             }
             else{
                 $statusCode = 4;
             }
          }
          else{
            $statusCode = 5;
          }
       }
       else{
         $statusCode = 2;
       }

        header("location: index.php?status={$statusCode}");
     }

     else if("addWord" == $action){
        $word      = mysqli_real_escape_string($connection, $_REQUEST['word']);
        $meaning   = mysqli_real_escape_string($connection, $_REQUEST['meaning']);
        $user_id   = $_SESSION['id'] ?? 0;

        if( $word && $meaning && $user_id){
          $sqlQuery = "INSERT INTO word (user_id, word, meaning) VALUES ('$user_id','$word','$meaning')";
         //   echo $sqlQuery;
          mysqli_query($connection, $sqlQuery);
          header("Location: allWord.php");
        }
     }


  }

?>