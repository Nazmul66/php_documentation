<?php
     $fileName = "C:/xampp/htdocs/php/files_7/file/files2.txt";

     // file_put_contents works on last data can be inserted into txt file but others existing files are not be able to stored by default, if you allow all data just use third parameter

     // LOCK_EX is used for when user is allowed to write the users data, is to store when user write down to save the data
     file_put_contents($fileName, "mars\n", FILE_APPEND | LOCK_EX);
     file_put_contents($fileName, "pluto\n", FILE_APPEND | LOCK_EX);

?>