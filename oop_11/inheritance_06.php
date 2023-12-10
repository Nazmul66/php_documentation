<?php

  class Animal {

    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }
     
    function eat(){
        echo "{$this->name} is eating \n";
    }

    function run(){
        echo "I am running \n";
    }

    function sleep(){
        echo "I am sleeping \n";
    }

    function greet() {
        
    }

    protected function title ($title) {
        $this->name = $title . "" . $this->name;
    }

  }


  class Human extends Animal {
    function greet() {
         $this->title("Mrs.");
         echo "{$this->name} hello public\n";
    }

  }

  class Cat extends Animal {
    function greet() {
        echo "{$this->name} hello meow\n";
    }

  }

$human = new Human("rashed");
$cat = new Cat("moyna");
// $human->greet();
$cat->eat();


?>