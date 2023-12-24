<?php
class Person{
    public $firstName;
    public $lastName;
    private $private;
}

$p = new Person("");

$p->firstName = "Nazmul";
$p->lastName = "Hassan";

echo json_encode($p); // only (public or static or function) property gulo json a encode korte parbe na


?>