<?php

// early and late binding ar moddhe different holo jokhon class ar bhitore static thaka kalin    ( self ) use kora thakle se khettre age jekhane class define kora royese sekhane age result pabe.

class Planet {
    static function echoName() {
    //    echo self::getName();
       echo static::getName();  // static use koray age jeta class kora hoyese setay result debe 
    }

    static function getName() {
        return "planet"; 
    }
}

class Earth extends Planet {
    static function getName() {
        return "Earth"; 
    }
}

// Planet::echoName(); 
Earth::echoName();  

?>