<?php
$to = "hnazmul748@gmail.com";
$from = "nh4647352@gmail.com";
$subject = "Application for Backend Developer";
$body = "hi there \n Lorem ipsum dolor sit amet";
$headers = "From: {$from}\r\n";


if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sent to $to...";
} else {
    echo "Email sending failed...";
}


?>