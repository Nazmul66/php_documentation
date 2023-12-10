<?php
// namespace khub khub kajer akta jinish ja class gulo ke khuje ber korte help kore and jate kore folder structure onujaye kaj korte help kore


// namespace astronomy;
namespace astronomy;


// also included php files 
include "planet.php";
include "doctor.php";

// 1st way define namespace.And jodi ai file ta upore shurur dike jodi namespace likha na thake tahole amader je bhabe file gulo define kore nite hobe

// $planet = new astronomy\planets\Planet();
// $doctor = new astronomy\doctors\Doctor();


// 2nd way define namespace.And namespace ar name ta jodi shob file a same lekha thake like (doctor.php -> astronomy, planet.php -> astronomy) agulo same thakle tahole abhabe kaj korte hobe
// $planet = new Planet();
// $doctor = new Doctor();


// 3rd way define namespace 
// $planet = new \astronomy\planets\Planet();
// $doctor = new \astronomy\doctors\Doctor();


// 4th way define namespace 
$planet = new planets\Planet();
$doctor = new doctors\Doctor();


$planet->getName(); 
$doctor->getName(); 
?>