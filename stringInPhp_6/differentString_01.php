<?php 
 $name = "nazmul";

  // write the string single quote that it will gives you the full string data
  echo 'my name is $name'. "\n";

 // write the string double quote that it will gives you the dynamic string data result
 echo "my name is $name \n";

  // nullDoc is new string method that will gives you tio write multiple line string data but it basically full string data
  $nullDoc = <<<'DOF'
  delta force
  kola pata {$name}
  desktop
  DOF;
  
  echo $nullDoc;

 // heredoc is new string method that will gives you tio write multiple line string data result but it will dynamically write dynamic string data
 $hereDoc = <<<DOF
delta force
kola pata {$name}
desktop
DOF;

echo $hereDoc;
?>