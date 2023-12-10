<?php
    
 class Student {

     private $name;
     private $age;
     private $roll;

     public function __construct($name="", $age="", $roll="") {
         $this->name = $name;
         $this->age = $age;
         $this->roll = $roll;
     }

   // php build in magic methods __get/__set and upore joto method ashe shob gulo __get/__set parameter a ashbe and __set ar khettre data gulo update korte help kore but private variable thaka kalin class ar bahire access kora jabe cz ata build __get use kora hoyese.
   
     public function __get($prop){
        return $this->$prop;
     }

     public function __set($prop, $value){
        $this->$prop = $value;
     }

    //  function getName() {
    //     return $this->name;
    //  }

    //  function setName($name) {
    //     return $this->name = $name;
    //  }

    //  function getAge() {
    //     return $this->age;
    //  }

    //  function setAge($age) {
    //     return $this->age = $age;
    //  }


    //  function getRoll() {
    //     return $this->name;
    //  }

    //  function setRoll($Roll) {
    //     return $this->roll = $Roll;
    //  }
     
 }

 $student = new Student("samiul", 16, 10);
 $student->name = "jala";
 echo $student->name;

?>