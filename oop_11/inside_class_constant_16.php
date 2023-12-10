<?php
// const is an immutable because it is not called second time and const always work as a static stage play roll

define("OK", 123);
const city = "dhaka";


// inside the class define constants and bring the results but cannot be used directly double quoted 
class MyClass {
    const city = "Dhaka \n";

    function sayHi() {
        // echo "Hi people's ".self::city . "\n";
        echo "Hi people's ".$this::city . "\n"; // or this
    }
}

$class = new MyClass();

$class->sayHi();

// 1st way result came out
echo $class::city;

// 2nd way result came out
echo MyClass::city;



?>