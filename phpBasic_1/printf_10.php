<?php
  $fname = "issac";
  $lname = "newton";

  // normally use printf data
  // printf("My name is %s %s \n", $lname, $fname);

  // string can be sequence of characters line by line
  // printf('My name is %2$s %1$s', $lname, $fname);

  // atar mane holo (.) ar 2 ghor number nebe
  $n = 45.253;
  printf("%.2f", $n);

  // number ar age kisu ( 0 ) number bosate chai
  $num = 123; // 0123
  printf("%04d \n", $num);

  // total number ar age pore koto value hobe and ( 0 ) soho kare
  $number = 123.214; // 0123
  printf("%08.2f", $number);

?>