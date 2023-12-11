<?php
trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;

    function sayHi(){
        echo "hi, My Class A \n";
    }
}

class MyClassB{
    use MyTrait;

    function sayHi(){
        echo "hi, My Class B \n";
    }
}

$m = new MyClassA();
$m->sayHi();

$m2 = new MyClassB();
$m2->sayHi();

MyClassA::$number = 2;
MyClassB::$number = 5;
echo MyClassA::$number;
echo MyClassB::$number;


?>