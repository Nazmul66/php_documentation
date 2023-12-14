<?php
// some configuration to set SMTP email setting on localhost and here is the configuration youtube video links (https://www.youtube.com/watch?v=g78MNlDQkys&list=LL&index=1&t=1260s)

$to = "hnazmul748@gmail.com";  
$from = "Nazmul Hassan <nh4647352@gmail.com>"; // name and email address ta tag use koray name ta chole ashse jetay hover korle email show hoy
$subject = "Application for Backend Developer";
$body = "hi there \n Lorem ipsum dolor sit amet";
$headers = "From: {$from}\r\n"; // string ar bhitor "From:" 100% likhte hobe nahole error ashbe


if (mail($to, $subject, $body, $headers)) {
    echo "Email successfully sent to $to...";
} else {
    echo "Email sending failed...";
}


?>