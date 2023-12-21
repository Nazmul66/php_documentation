<?php

// NOTICE: by default to disable all error into (php.ini -> xampp server configuration) to search find the (display_errors) then edit to (off).

// error bondho kore rakhar jonno error_reporting(0) arguments 0 dile shob error bondho thakbe, error dekhabe na
// error_reporting(0);

// Error all dekhate hole (E_ALL) likhle all error delkhanu hobe 
// error_reporting(E_ALL);

// different error type show/ off korate hole error gulor name bole dite hobe 
// error_reporting(E_WARNING | E_NOTICE);

// PHP build in code to disable error reporting
ini_set("display_errors",0);
ini_set("display_startup_errors",0);

echo $book;



?>