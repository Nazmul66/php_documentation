<?php
namespace Project;

include "c1.php";
include "c2.php";

// amra jekuno class ke alias baniye amra easily kaj kore felte pari 
use \Project\Motorcycles\Bike as Hornet;
use \Project\Bike as Pulsar;

$c1 = new Pulsar();
$c2 = new Hornet();
echo $c1->getName();
echo $c2->getName();

?>