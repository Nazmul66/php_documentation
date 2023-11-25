<?php
   $string = "lorem ipsum dolor sit amet, consect \n et dolor sit amet con \n et alea commodo consequ"; 

   echo $string;

   // nl2br, this function is use for php "\n" is break to new line on backend side but in windows, view port is not showing it.so, a function that "\n" convert to <br /> to break new line in the html pages.
   echo nl2br($string);
?>