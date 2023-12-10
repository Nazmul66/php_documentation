<?php

class Shape{

}
  
  class Shapes{
     public $shape;

     function __construct () {
        $this->shape = array();
     }

     // this (Shape) added to first arguments before that it will to call those class who will extent the Shape that can be countable and work. Others will be not work or it will show error
     function addArray(Shape $shape) {
        array_push($this->shape, $shape);
     }

     function totalArray () {
        echo count($this->shape);
     }
  }

  class Rectangles extends Shape{

  }

  class Triangles extends Shape{

  }

  class Student{

  }

  $dataCollection = new Shapes();
  $dataCollection->addArray(new Rectangles(""));
  $dataCollection->addArray(new Triangles(""));
//   $dataCollection->addArray(new Student(""));

  $dataCollection->totalArray();

?>