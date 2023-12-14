<?php

// example of using Unsplash image (<img src='https://source.unsplash.com/photos/2FiXtdnVhjQ'>) before add (.unsplash) first add (source.) then url

$to       = "hnazmul748@gmail.com";  
$from     = "Nazmul Hassan <nh4647352@gmail.com>"; 
$subject  = "Application for Backend Developer - Nginx";
$body     = "<strong>Hi there</strong> <br/> আমি ভাত খাই <br/>";
$body    .= "<img src='https://source.unsplash.com/photos/2FiXtdnVhjQ'>"; // (.=) means add hotse
$headers  = "MIME-Version: 1.0 \r\n"; // first MIME-Version
$headers .= "Content-type:text/html;charset=UTF-8\r\n"; // second content-type
$headers .= "From: {$from}\r\n"; // third email


if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sending to $to...";
} else {
    echo "Email sending failed...";
}



?>



