<?php

interface Vehicles{
   function getName();
   function getMilage();
   function getPrice();
}

interface TwoWheelInterface{
   function twoWheel ();
}

interface FourWheelInterface{
    
}

interface SixWheelInterface{
    function sixWheel ();
}

class MotorCycle implements Vehicles, TwoWheelInterface{
    function getName(){}
    function getMilage(){}
    function getPrice(){}
    function twoWheel (){}
}

class Truck implements SixWheelInterface{
    function getName(){}
    function getMilage(){}
    function getPrice(){}
    function sixWheel (){}
}

?>