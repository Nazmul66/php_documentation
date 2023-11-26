<?php
$fileName = "C:/xampp/htdocs/php/files_7/file/files5.txt";
$students = array(
   array(
       "fname" => "nazmul",
       "lname" => "hassan",
       "age" => 25,
       "class" => 10,
       "roll" => 25
   ),
   array(
       "fname" => "kabir",
       "lname" => "hassan",
       "age" => 20,
       "class" => 7,
       "roll" => 8
   ),
   array(
       "fname" => "jannat",
       "lname" => "priti",
       "age" => 22,
       "class" => 9,
       "roll" => 18
   )
);


$student = array(
   "fname" => "miftaul",
   "lname" => "mitu",
   "age" => 16,
   "class" => 10,
   "roll" => 1
);

//  $encodedData = json_encode($students);
//  file_put_contents($fileName, $encodedData, LOCK_EX);

  $decodeData = file_get_contents($fileName);
  $allStudents = json_decode($decodeData);  // this is now object studio data
  print_r( $allStudents);

  // treat like object method
  echo $allStudents[0] -> fname;

?>