<?php
  $bio = "Nazmul Hassan 01833220886 hnazmul748@gmail.com";

  // all data convert string to array style
  $parts = sscanf($bio ,"%s %s %s");
  print_r($parts);

  // all data convert string to array style and shortcut way to get array single data
  sscanf($bio ,"%s %s %s", $fname, $lname, $number);
//   echo $fname;
//   echo $lname;

$rgb = "#ffe5e5";
$colors = sscanf($rgb, "#%2x%2x%2x");
print_r($colors) ;

?>