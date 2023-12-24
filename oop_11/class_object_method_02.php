<?php
   
   class Human{
       public $name;
       function sayHi(){
          echo "salam\n";
          $this->myName();
       }

      private function myName() {
         echo "my name is {$this->name}";
       }
   }

   class Cat{
      function sayHi(){
         echo "salam\n";
      }
   }

   class Dog{
      function sayHi(){
         echo "salam\n";
      }
   }

$human = new Human("");
$human2 = new Human("");

$human->name = "rahul";
$human2->name = "rukhsana";
echo $human->name;
echo $human2->name;
$cat = new Cat("");
$dog = new Dog();


$human->sayHi();
$human2->sayHi();
// $human->myName();



// $cat->sayHi();
// $dog->sayHi();

?>