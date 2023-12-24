<?php
   $password = "secret password";
   $hash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 10]);
   echo $hash . "\n";

   $userInput = "secret password2";
   echo password_verify($userInput,$hash);
?>