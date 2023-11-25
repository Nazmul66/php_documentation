<?php
  $string1 = "Quick brown Fox fox jumps over the lazy dog";
  $string2 = "Quick brown Fox jumps over the lazy dog";
  $string3 = "Quick brown fox fox jumps over the lazy dog";

  // (strpos) it will search to find string data and return they will give you the result of indexing number and also case sensitive
  $search1 = strpos($string1, "fox");
//   echo $search1;

  // (stripos) it will search to find string data and return they will give you the result of indexing number and also case sensitive
  $search2 = stripos($string1, "fox");
//   echo $search2;

  // position check number indexing number
  $search3 = strpos($string1, "fox", 13);
//   echo $search3;


  // it wll search to the last element result
  $search4 = strrpos($string3, "fox");
  echo $search4;
?>