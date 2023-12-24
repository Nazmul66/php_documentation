<?php
// Hashing
echo md5("let's go bro") . PHP_EOL;
// print_r(hash_algos()); // hash algorithm functions
echo hash("sha512", "let's go bro") . PHP_EOL;
?>