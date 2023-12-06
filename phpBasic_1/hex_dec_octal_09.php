<?php
// number formula rules
  /* $decimal   = "0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16";
   $hexadecimal = "0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F";
   $Octal       = "0,1,2,3,4,5,6,7,10,11,12,13,14,15,16,17,20"; */

  $n = 12; // ata normally decimal number
  $o = 015; // kono number ar age jodi ( 0 ) thake tahole seta octal number hobe
  $hx = 0x2B;

  printf("the number is %d and %d and %d \n", $n, $o, $hx);

    // convert decimal to binary formate use ( b )
    // printf("the number is %d and %b" \n, 1212, 1212);

    // convert decimal to hexadecimal formate use ( x )
    // printf("the number is %d and %x \n", 1212, 1212);

    // convert decimal to octal formate use ( x )
    printf("the number is %d and %o \n", 1212, 1212);

?>