<?php
   
   interface BaseAnimal {
        function isAlive();
        function canEat();
        function breed();
   }

   class Animal implements BaseAnimal{

        function isAlive(){

        }

        function canEat(){

        }

        function breed(){

        }
   
    }
         
     interface BaseHuman extends BaseAnimal{
         function canTalk(); 
     }  

     class Human implements BaseHuman{
        function isAlive(){

        }

        function canEat(){

        }

        function breed(){

        }
        function canTalk(){

        } 
     }

     $h = new Human("");
     $a = new Animal("");
     
     echo $a instanceof BaseAnimal;

     // instanceof use for to final there is a any class type are really existing to check, it is called (polymorphism). 
     echo $h instanceof BaseAnimal;


?>