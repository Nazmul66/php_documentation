<?php
$message = "This is a secret message";
$key = "secure data";
// print_r(hash_hmac_algos()); // hash_hmac_algos all algos
// echo hash_hmac("whirlpool",$message,$key);
// echo hash_hmac("sha512",$message,$key);
echo hash_hmac("sha512",$message,$key);

?>