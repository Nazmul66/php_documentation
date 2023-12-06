<?php

  class Human{
      private $name;
      private $age;

      function __construct ($name, $age=0) {
         $this->name = $name;
         $this->age = $age;
      }

      function sayHi (){
         echo "salam";
         $this->myName();
      }

      private function myName (){
          if($this->age){
            echo "My name is {$this->name} and i am also {$this->age} years old.\n";
          }
          else{
            echo "My name is {$this->name} and i don't know my age";
          }
      }
  }

$human = new Human("John", 20);
$human2 = new Human("meherun");
$human->sayHi();
$human2->sayHi();


?>
