<?php
// public static only access to their own method to their classes not other class but if protected static methods use it will access other classes when it extended.
  class A{
    protected static $name;

    static function sayHi() {
        self::$name = "Hello \n";
       echo "Hi from A \n";
    }

  }

  class B extends A{

    static function sayHi() {
       parent::sayHi();
       echo parent::$name;
       echo "Hi from B \n";
       echo "Hello B";
    }
  }

B::sayHi();
// echo B::$name;
?>