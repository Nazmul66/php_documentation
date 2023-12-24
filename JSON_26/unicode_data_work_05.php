<?php
 $unicode = array(
    "Bangladesh" => "বাংলাদেশ"
 );

 // unicode characters gulo thik rakhar jonno ( JSON_UNESCAPED_UNICODE ) use kora best hobe
 echo json_encode($unicode, JSON_UNESCAPED_UNICODE);

?>