<?php

// array data __get 

 class Motorcycle {
    public $parameters;

    function __construct($displacement, $capacity, $mileage)
    {
       $this->parameters = [];
       $this->parameters["displacement"] = $displacement;
       $this->parameters["capacity"] = $capacity;
       $this->parameters["mileage"] = $mileage;
    }

    function getDisplacement() {
        return $this->parameters["displacement"];
    }

    // to check there is a any tireSize parameter are there.So, we need to check there is any data are available are here.
    function __isset($name)
    {
        if(!isset($this->parameters[$name])){
            echo "{$name} not found \n";
            return false;
        }
        else{
            return true;
        }
    }

    // unset ta use korle direct class theke seta bahire remove korte help kore 
    function __unset($name)
    {
        unset($this->parameters[$name]);
    }

    function __get($name)
    {
       return $this->parameters[$name];
    }

    function __set($name, $value)
    {
       return $this->parameters[$name] = $value;
    }

    // call method function to check there is any callback function are defined or not for ( error checking )
    function __call($name, $arguments)
    {
        if("run" == $name){
            if($arguments){
                echo "paise {$arguments[0]} arguments";
            }
            else{
                echo "pai nai arguments";
            }

        }
        else{
            echo "pain nai";
        }
    }
 
    // ata as usually _call method function ar moto but different holo ata static function check kore thake
    static function __callStatic($name, $arguments)
    {
        echo "staic function \n";
    }

    function setDisplacement($displacement) {
        $this->parameters["displacement"] = $displacement;
    }
    

 }

 Motorcycle::wash();

 $pulser = new Motorcycle("150cc", "160", "40kmph");

 $pulser->displacement = "120cc";

 // this one mis connected to __isset method call
 if(isset($pulser->tireSize)){
    echo "found \n";
 }
 else{
    echo "not found";
 }

 // unset ta direct remove kora jabe na class theke seta remove korar jonno class ar bhitore __unset method call korle direct remove kora jabe.
 unset($pulser->capacity);
 print_r($pulser);

 // run("100") ai function class ar bhitor define kora nay but to be checked that use __call and run is $name functions and 100 is arguments parameter. and ata jodi __call method function use na korle error petam for checked.
 $pulser->run("100");



?>