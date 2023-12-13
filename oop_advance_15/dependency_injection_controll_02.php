<?php

interface BaseStudents {
    function displayName();
}

class Student implements BaseStudents{
    private $name;
    function __construct($name)
    { 
        $this->name = $name;
    }

    function displayName() {
        echo "Hello {$this->name}";
    }
}

class StudentFullName implements BaseStudents{
    private $name;
    private $title;
    function __construct($name, $title)
    { 
        $this->name = $name;
        $this->title = $title;
    }

    function displayName() {
        echo "Hello {$this->title}. {$this->name}";
    }
}

class StudentManagement{

    function introduction (BaseStudents $students){
        $students->displayName();
    }
}

$st = new Student("Edward");
$stfn = new StudentFullName("Elen", "Mr");
$sm = new StudentManagement();
$sm->introduction($stfn);


?>