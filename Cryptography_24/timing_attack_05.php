<?php
$password = "secret Data"; 
$hash = hash("sha1", $password);
echo $hash;

 $userInputs = hash("sha1", $_POST["password"]);
 // using hash equal to secure password
 if(hash_equals($hash, $userInputs)){
    echo "password matched";
 }
 else{
    echo "wrong password";
 }
?>