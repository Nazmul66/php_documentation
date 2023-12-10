<?php
   class RGB{
      private $color;
      private $red;
      private $green;
      private $blue;

      function __construct($colorCode = ""){
         $this->color = ltrim($colorCode, "#");
         $this->parseColor();
      }

      function getColor (){
         return $this->color;
      }

      function setColor($colorCode) {
         $this->color = ltrim($colorCode, "#");
         $this->parseColor();
      }

      function allColors () {
         return array($this->red, $this->green, $this->blue);
      }

      function readRgbColor() {
         echo "{$this->red} and {$this->green} and {$this->blue}";
      }

      private function parseColor(){
         if($this->color){
            echo "color found \n";
            list($this->red, $this->green, $this->blue) = sscanf($this->color, "%2x%2x%2x");
         }
         else{
            echo "color not found \n";
            list($this->red, $this->green, $this->blue) = array(0,0,0);
         }
      }

      public function getRed() {
         return  $this->red;
      }

      public function getGreen() {
         return $this->green;
      }

      public function getBlue() {
         return $this->blue;
      }
   }

$colors = new RGB("#ff0000");
echo $colors->readRgbColor();
// print_r($colors->allColors()) ;


?>