<?php
     $fileName = "C:/xampp/htdocs/php/files_7/file/files4.txt";
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

    //  $data = serialize($students);
    //  file_put_contents($fileName, $data, LOCK_EX);

    $dataFromFile = file_get_contents($fileName);
    $allStudents = unserialize($dataFromFile);
    // print_r($allStudents);

    // unset($allStudents[1]);

    array_push($allStudents, $student);

    // $data = serialize($allStudents);
    // file_put_contents($fileName, $data, LOCK_EX);

?>