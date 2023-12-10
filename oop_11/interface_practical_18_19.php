<?php
 // as usually normal array ber kore setar array data count or array loop kore data pawa jabe
 
  class DistrictCollection {
      private $district;
      
      function __construct() {
        $this->district = array();
      }

      function add($district){
        array_push($this->district, $district);
      }

      function getDistrict() {
         return $this->district;
      }
  }

  $district = new DistrictCollection();
  $district->add("Comilla");
  $district->add("Dhaka");
  $district->add("Borishal");
  $district->add("Sylhet");
  $district->add("Bogra");

  $allArray = $district->getDistrict();
  // array print_r
  print_r($allArray);
  $arrayCount = count($allArray);

  // array data count
  echo $arrayCount . "\n";

  foreach ($allArray as $array){
    echo $array . "\n";
  }

?>