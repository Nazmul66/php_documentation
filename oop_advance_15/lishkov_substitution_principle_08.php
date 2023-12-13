<?php

 abstract class Bird{
    abstract function eat();
    abstract function sleep();
 }

 abstract class walkingBird extends Bird{
    abstract function walk();
 }

 abstract class flyingBird extends Bird{
    abstract function fly();
 }

 class BirdManager {
     function maintainBird(Bird $b) {
        $b->eat();
        $b->sleep();
     }

     function maintainFlyingBird(flyingBird $b) {
        $b->fly();
     }

     function maintainWalkingBird(walkingBird $b) {
        $b->walk();
     }
 }


 class Eagle extends flyingBird{
    
    function eat(){
       echo "Eagle eat \n";
    }

    function sleep(){
        echo "Eagle sleep \n";
    }

    function fly(){
        echo "Eagle flying \n";
    }

 }

 class Penguin extends walkingBird{
    
    function eat(){
        echo "Penguin eat \n";
    }

    function sleep(){
        echo "Penguin sleep \n";
    }

    function walk(){
        echo "Penguin walk \n";
    }

 }

 $eagle = new Eagle();
 $penguin = new Penguin();

 $BirdManager = new BirdManager();
 $BirdManager->maintainBird($eagle);
 $BirdManager->maintainBird($penguin);
 $BirdManager->maintainFlyingBird($eagle);
 $BirdManager->maintainWalkingBird($penguin);
 
?>