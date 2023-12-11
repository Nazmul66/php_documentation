<?php

class Student {
    public $name;
    public $age;

    function __construct($name , $age) {
        $this->name = $name;
        if( $age <= 4 ){
           throw new Exception("Too young", 301);
        }
        else if( $age >= 35 ) {
            throw new Exception("Too Old", 303);
        }
        $this->age = $age;
    }
}
try{
    $s = new Student("rakib", 4);
    echo "working \n";
}
catch(Exception $e){
    echo $e->getCode(). ":" .$e->getMessage() . "\n";
}
// finally{
//    echo "always work through";
// }

?>