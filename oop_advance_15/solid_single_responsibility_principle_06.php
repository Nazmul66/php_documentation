<?php
class Mailer{

    function sendMail ($to, $from, $subject, $message, $attachment) {

    }

    function connectMTA ($mtaType, $username, $password){

    }

    function prepareMail($to, $from, $subject, $message) {}
    function dispatch (){}


}

class BetterMailer {
    private $mg;
    private $mail;
    private $attachment;

    function __construct(MailGatewayInterface $mg, MailInterface $mail, AttachmentInterface $attachment) {
        $this->mg = $mg;
        $this->mail = $mail;
        $this->attachment = $attachment;
    }

    function sendMail ($to, $from, $subject, $message, $attachment) {
        $this->mail->attachment($attachment);
        $mailBody = $this->mail->prepare($to, $from, $subject, $message);
        $this->mail->connect();
        $this->mail->send($mailBody);
    }
}



?>
