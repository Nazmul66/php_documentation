<?php
     $fileName = "C:/xampp/htdocs/php/files_7/file/files3.txt";

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


  // write the all data and store it in the (C:/xampp/htdocs/php/files_7/file/files3.txt)
   /* $fp = fopen($fileName, "w");
   foreach($students as $student){
      $data = sprintf("%s, %s, %s, %s, %s\n", $student["fname"], $student["lname"], $student["age"], $student["class"], $student["roll"]);
      fwrite($fp, $data);
   }
   fclose($fp); */


   // use fputcsv to write the data and added coma to 
  //  $fp = fopen($fileName, "w");
  // foreach($students as $student){
 //     fputcsv($fp, $student);
 //  }
 //  fclose($fp);


   // read to get all data on looped
//    $fp = fopen($fileName, "r");
//    while($data = fgets($fp)){
//      $student = explode(", ", $data);
//       print_r($student);
//       printf("fname => %s\nlname => %s\nage => %s\nroll => %s\nclass => %s\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
//    }

//    fclose($fp); 


   // read to get all data on looped and same as like above just use fgetcsv() function
//    $fp = fopen($fileName, "r");
//    while($student = fgetcsv($fp)){
//     print_r($student);
//     printf("fname => %s\nlname => %s\nage => %s\nroll => %s\nclass => %s\n", $student[0], $student[1], $student[2], $student[3], $student[4]);
//    }

//    fclose($fp); 


// append new data stored
$student = array(
    "fname" => "miftaul",
    "lname" => "mitu",
    "age" => 16,
    "class" => 10,
    "roll" => 1
);

$fp = fopen($fileName, "a");
fputcsv($fp, $student);
fclose($fp);

?>

