<?php

$data = array(
    "firstName" => "John",
    "lastName"  => "doe",
    "email"     => "john@example.com",
);

// ( JSON_PRETTY_PRINT ) is used for print beautiful json output
$encode = json_encode($data, JSON_PRETTY_PRINT);  
print_r($encode);

?>