<?php
 $password  = "Secret Password";
 $hash      = md5($password);
//  echo $hash;

 $userInput = "users password";
 if(md5($userInput) == "df02c6d2cc237b4ae8ab2aa04802ea76"){
    echo "Password is Correct";
 }
 else{
    echo "Password is inCorrect";
 }
?>