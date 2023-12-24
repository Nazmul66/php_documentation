<?php
// $data = $_GET;  // for accept GET request
$data = $_REQUEST;
$data["result"] = "success";
$data["method"] = $_SERVER["REQUEST_METHOD"];
// print_r( $get);
echo json_encode($data, JSON_PRETTY_PRINT);
?>