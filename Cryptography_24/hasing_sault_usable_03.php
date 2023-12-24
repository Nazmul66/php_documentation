<?php
 $salt = "th1s1s@goodjob";
 $password  = "Secret Password";
 $hash      = md5($password.$salt);
//  echo $hash;

 $userInput = "users password";
 if(md5($userInput) == "cd4541b6bf504ce7da3d47729bebbd2d"){
    echo "Password is Correct";
 }
 else{
    echo "Password is inCorrect";
 }

?>