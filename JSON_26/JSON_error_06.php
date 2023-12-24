<?php
$json = "{'Bangladesh' => 'বাংলাদেশ'}";

print_r(json_encode($json, JSON_UNESCAPED_SLASHES));
echo json_last_error_msg();

?>