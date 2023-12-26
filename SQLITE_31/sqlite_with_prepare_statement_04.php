<?php
  $PDO = new PDO("sqlite:sample.sqlite");

  $stmt = $PDO->prepare("SELECT * FROM users WHERE email = ?");
  $email = "hnazmul748@gmail.com";
//   $stmt->bindParam(1, $email, PDO::PARAM_STR);

  // OR this one
  $stmt->execute([$email]);

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);
?>