<?php
namespace CloudStorage;
// include "mail/mailer.php";
include "autoloader.php";

use \CloudStorage\Mail\Mailer as Mail;
use \CloudStorage\FileSystem\Scanner as Scanner;
// use \CloudStorage\FileSystem\Files\Contracts\ImageContracts as ImageContracts;
use \CloudStorage\FileSystem\Files\Images\JPEG as JPEG;

class Main {

    function __construct(){
      //  (new mail\Mailer())->sendMail();  // 1st way
      //   $mailer = new mail\Mailer();  // 2nd way
      $mailer = new Mail();  // 3rd way
      $scanner = new Scanner();
    //   $ImageContracts = new ImageContracts();
      $jpeg = new JPEG();

      $mailer->sendMail();
      $scanner->scan();
    //   $ImageContracts->getDimension();
     echo $jpeg->getDimension();
    }
}

$main = new Main();

?>