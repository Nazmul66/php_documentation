<?php 
  $string = "  hello \n,";

  // trim use for removing spaces
  $string1 = trim($string);
  echo $string1;

  // trim use for removing spaces and 2nd parameter use to tell about which character will be trimmed, just specify the name
  $string2 = trim($string, " ,");
  echo $string2;

  // left trim is to be remove all spaces included coma or others
  $string3 = ltrim($string);
  echo $string3;

  // right trim is to be remove all spaces included coma or others
  $string4 = rtrim($string, " ,");
  echo $string4;

?>