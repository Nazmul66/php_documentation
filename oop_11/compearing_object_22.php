<?php

// to check comparing object properties when it came's to type checking

class Planet {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }
}


$p = new Planet("rumel");
$p2 = $p;
$e = new Planet("rumel");

if($p === $e ){
  echo "Name's are same \n";
}
else{
  echo "Name's are not same \n";
}
// echo gettype($p);
?>