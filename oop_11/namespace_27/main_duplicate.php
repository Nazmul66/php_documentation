<?php
namespace Astronomy;

include "earth.php";
include "doctor.php";

$earth = new Planets\Planet();
$doctor = new Doctors\Doctor();


$earth->getName(); 
$doctor->getName(); 

?>