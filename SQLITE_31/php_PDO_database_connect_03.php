<?php
  $PDO = new PDO("sqlite:sample.sqlite");
  $stmt = $PDO->query("SELECT * FROM users");
  print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

  $users = array(
      ["name" => "Kabir Hossain", "email" => "kabir.hossain@gmail.com"],
      ["name" => "jamir Hossain", "email" => "jamir.hossain@gmail.com"],
      ["name" => "ranvir Hossain", "email" => "ranvir.hossain@gmail.com"],
  );

  foreach($users as $user){
    $PDO->query("INSERT INTO users (name, email) VALUES('{$user['name']}','{$user['email']}')");
  }

  $stmt = $PDO->query("SELECT * FROM users");
  print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
 


?>