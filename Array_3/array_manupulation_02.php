<?php

  $student = array("rahin", "rashed", "onil", "daisy", 20);
  print_r($student);

  // array can be modified by indexing
  $student[2] = "onil bhai";
  print_r($student);

  // array_shift method, it will remove first index from array
  $students = array_shift($student);
  print_r($students);

  // array_pop method, it will remove last index from array
  $students = array_pop($student);
  print_r($students);

  // array_push method, it will added data at the last index
  array_push($student, "diaun bhai");

  // another way of array push method, it will be empty array
  $student[] = "dolly";

  // array_unshift method, it will added data at the first index
  array_unshift($student, "shawon");

  print_r($student);
?>