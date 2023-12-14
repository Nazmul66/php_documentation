<?php
require_once "PHPMailer.php";
require_once "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try{
    $pm->setFrom("nh4647352@gmail.com");
    $pm->addAddress("hnazmul748@gmail.com", "Nazmul Hassan");
    $pm->Subject = "Here is the Invoice";
    $pm->Body = "Hi, Here is the <strong>Invoice</strong> from the last purchase";
    $pm->AltBody = "Hi, Here is the Invoice from the last purchase";
    $pm->isHTML(true);
    $pm->addAttachment('C:/xampp/htdocs/php/mailing in PHP_16/PHP_mailer_attachment_04/Cover Letter ( Frontend developer ).pdf');
    $pm->send();

    echo "mail send";
}

catch(Exception $e) {
    echo "Failed". $pm->ErrorInfo;
}

?>