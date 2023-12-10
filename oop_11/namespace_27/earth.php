<?php
namespace Astronomy\Planets;
include "planet.php";

class Earth extends \astronomy\planets\Planet{
    function getName() {
        echo "Earth \n";
    }
}

?>