<?php
$text = "Here is the data format";

// base64_encode is encryption 
$encryption = base64_encode($text); 
echo $encryption;

echo PHP_EOL;

// base64_decode is decoding 
$decode = base64_decode($encryption);
echo $decode;

?>