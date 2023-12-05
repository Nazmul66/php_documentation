<?php
// 1) normal usually setcookie
//   setcookie("username", "hulk", time()+20);

// 2) (cookie delete) just adding 3rd parameter use 1
  setcookie("username", "hulk", 1);

// 3) cookie set for that specify routes to see the cookie values and sub folder cookies are acceptable
//  setcookie("username", "hulk", time()+200, "../cookie/cookie.php");

  if(isset($_COOKIE['username'])){
    echo $_COOKIE['username'];
  }
?>