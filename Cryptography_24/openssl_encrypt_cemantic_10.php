<?php

print_r(openssl_get_cipher_methods()); 

// to create a new cipher to secure encrypted data and also using (aes-128-ccm) also add $tag argument
$method = 'aes-128-ccm'; // aes-128-cbc
$ivLength = openssl_cipher_iv_length($method);
$iv = openssl_random_pseudo_bytes($ivLength);
// echo bin2hex($iv);

$message  = "This is a secret message";
$password = "secure data";

$encryptMessage = openssl_encrypt($message, $method , $password, 0, $iv, $tag);
echo $encryptMessage . "\n";

// this one is encrypted to decrypt the message
echo openssl_decrypt($encryptMessage, $method , $password, 0, $iv, $tag);

?>