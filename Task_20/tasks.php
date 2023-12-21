<?php
   include "config.php";

  $action = isset($_POST['action']) ? $_POST['action'] : "";
//   $action =  $_POST['action'] ?? "";

  if(!$action){
      header("location:index.php");
      die();
  }
  else{
    // echo $action;
    if("add" == $action){
        $task = $_POST['task'];
        $date = $_POST['date'];

        if($task && $date){
            $query = "INSERT INTO `task` (task, date) Values('$task', '$date')";
            // echo $query;
            $sql = mysqli_query($connection, $query);
            header("location: index.php?added=true");
        }
    }
    else if("bulkComplete" == $action){
        // echo $action;
      $taskIds = $_POST['taskIds'];

      if($taskIds){
          $_task = join(",", $taskIds);
          //   echo $_task;
          $query = "UPDATE `task` SET complete=1 where id in ($_task)";
          $bulkComplete = mysqli_query($connection, $query);
          header("location: index.php");
      }
      else{
        header("location: index.php");
      }
    }

    else if("bulkDelete" == $action){
        // echo $action;
        $taskIds = $_POST['taskIds'];
  
        if($taskIds){
            $_task = join(",", $taskIds);
            // echo $_task;
            $query = "DELETE FROM `task` where id in ($_task)";
            $bulkComplete = mysqli_query($connection, $query);
            header("location: index.php");
        }
        else{
            header("location: index.php");
        }
      }

  }
?>