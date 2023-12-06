<?php
$n = 12;

if( $n%2 == 0 ):
  echo "happy";
  echo PHP_EOL;  // create new line
  echo "working";
  
else:
    echo "sad";
    echo PHP_EOL;  // create new line
    echo "not working";

endif;

?>