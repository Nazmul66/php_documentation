<?php
$message = "This is a secret message";

$blowFish_salt = "$2y$10S" . bin2hex(random_bytes(11));
echo $blowFish_salt;

echo PHP_EOL;

echo crypt($message, $blowFish_salt);


?>