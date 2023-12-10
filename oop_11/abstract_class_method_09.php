<?php
  
  // abstract ar kaj holo ami jokhon abstract use korbo tokhon ami jekhane inheritance korbo tokhon abstract a ja ja thakbe shob gulo amr forcely shei jinish gulo bosate hobe hubohu same to same bosate hobe.
  abstract class Shapes {
    public function getData () {
       echo "get data";
    }
    abstract public function getArea($num, $num2 = 0);
    abstract public function getPeatier();
  }

  class Rectangle extends Shapes {

    private $base, $height;

    public function __construct($base, $height) {
       $this->base = $base;
       $this->height = $height;
    }

    public function setBase ( $base ) {
      return $this->base = $base . "\n";
    }

    public function setHeight ( $height ) {
      return $this->height = $height . "\n";
    }

    public function getArea($num, $num2 = 0){
      return $this->base * $this->height . "\n";
    }

    public function getPeatier(){
      
    }
}
  
  $Rectangle = new Rectangle(10,10);
  echo $Rectangle->setHeight(15);
  echo $Rectangle->getArea(5, 10);

?>