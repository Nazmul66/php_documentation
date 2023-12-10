<?php
 
   // Final method use for it only work for parent class that can not override to child classes and it also works for 2 ways to implement them ( abstract and usual class methods ).

   // one ways to implement
   /* abstract class OurClass{
        final function doSomething() {
            echo "doing something";
        }
    } */

    // second ways to implement
    class OurClass {
        final function doSomething() {
            echo "doing something bro";
        }
    }

 class MyClass extends OurClass {

 }

 $MC = new MyClass();
 $MC-> doSomething();

?>