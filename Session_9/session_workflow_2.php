<?php 
  /*  session_name('example_cookie');
    session_start([
        'cookie_lifetime' => 0,
        'cookie_path' => '/',
        'cookie_domain' => '.example.com',
        'cookie_secure' => false,
        'cookie_httponly' => false,
        'cookie_samesite' => 'Strict'
    ]); */

// session name use kora hoy jate session ar cookie name onujayee set korte pari
// session_name('myApp');

session_start([
    'cookie_lifetime' => 60 // 1 minutes
]);

 $_SESSION['name']="ruby";
echo $_SESSION['name'];

// session_destroy();
?>



