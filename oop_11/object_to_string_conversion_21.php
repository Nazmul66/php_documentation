<?php

// object ke direct echo kora jayna so object ke string hisebe dekhate hole take __toString magic method use kore echo kore result setar bhiotre shob kisu pawa jabe

class Color{
    public $color;
 
    function __construct($color) {
       $this->color = $color;
    }
     
    function setColor ($color) {
       $this->color = $color;
    } 

    function __toString()
    {
        return "This is a {$this->color} color";
    }
    
 }

 $c = new Color("red");
 echo $c;


?>