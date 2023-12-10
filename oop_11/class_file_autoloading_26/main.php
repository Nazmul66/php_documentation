<?php

// include class file and access the class file convert to object method like ( (new Bike)->getType() ) has been written.

// the 1st way to include all the classes that included
// include "bike.php";
// include "planet.php";
// include "spaceship.php";


// the easiest way to include all the classes in this autoload
function autoload($name){
    include "{$name}.php";
 }
 
 // add the function name to spl_autoload_register as a arguments then call the all
 spl_autoload_register("autoload");
 
 (new Bike)->getType();
 (new Spaceship)->lunch();
 (new Dubbed)->dub();

?>