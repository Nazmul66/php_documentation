<?php

class ParentClass {
   
    protected $name;
    function __construct($name) {
        $this->name = $name;
        $this->sayHi();
    }

    public function sayHi() {
        echo "hello there {$this->name} \n";
    }

}

// first child class will be executed echo and if you would be interested to show the parent echo result just added ( parent::functionName() )
class ChildClass extends ParentClass{
    public function sayHi() {
        parent::sayHi();
        echo "hi there {$this->name} \n";
    }
}

$cc = new ChildClass("shawon");

?>