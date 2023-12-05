<?php
   define("DB", "C:/xampp/htdocs/php/crud_8/data/db.txt" );

  function seed (){
        $data = array(
            array(
                'id' => 1,
                'fname' => 'Nazmul',
                'lname' => 'Hassan',
                'roll' => '17',
                'phone' => '01930260802',
            ),
            array(
                'id' => 2,
                'fname' => 'Kabir',
                'lname' => 'Hossain',
                'roll' => '09',
                'phone' => '01930271802',
            ),
            array(
                'id' => 3,
                'fname' => 'shawon',
                'lname' => 'pollob',
                'roll' => '28',
                'phone' => '01845778948',
            ),
            array(
                'id' => 4,
                'fname' => 'jayed',
                'lname' => 'khan',
                'roll' => '21',
                'phone' => '01868512081',
            ),
            array(
                'id' => 5,
                'fname' => 'Tania',
                'lname' => 'Akter',
                'roll' => '11',
                'phone' => '01754892541',
            ),
            array(
                'id' => 6,
                'fname' => 'nahida',
                'lname' => 'Akter',
                'roll' => '02',
                'phone' => '01777651551',
            ),
            array(
                'id' => 7,
                'fname' => 'lufy',
                'lname' => 'taro',
                'roll' => '14',
                'phone' => '00966551792617',
            )
        );  
        
        $serialized = serialize($data);
        file_put_contents(DB, $serialized, LOCK_EX);
  }

  function generateReport(){
      $serialized = file_get_contents(DB);
      $unserialize = unserialize($serialized);
      return $unserialize;
  }
//   $dollar = generateReport();
//   print_r($dollar);


 function addStudents ($fname, $lname, $roll, $phone){
      $found             = false;
      $getSerializedData = file_get_contents(DB);
      $students          = unserialize($getSerializedData);
      foreach($students as $_student){
        if($_student['roll'] == $roll){
            $found = true;
            break;
        }
      }

    if(!$found){
        $newId = getNewId($students);
        $newStudent = array(
           'id'    => $newId,
           'fname' => $fname,
           'lname' => $lname,
           'roll'  => $roll,
           'phone' => $phone
        );
          array_push($students, $newStudent);
          $serialized = serialize($students);
          file_put_contents(DB, $serialized, LOCK_EX);
          return true;
    }
     return false;

 }


 function getStudent ($id){
   $getStudentData = file_get_contents(DB);
   $students = unserialize($getStudentData);
   foreach($students as $student){
       if($student['id'] == $id){
           return $student;
       }
   }
   return false;
 }

 function resultStudents ($id, $fname, $lname, $roll, $phone){
    $found = false;
    $getStudentData = file_get_contents(DB);
    $students = unserialize($getStudentData);
    foreach($students as $_student){
        if($_student['roll'] == $roll && $_student['id'] != $id){
            $found = true;
            break;
        }
      }

    if(!$found){
        $students[$id-1]['fname'] = $fname;
        $students[$id-1]['lname'] = $lname;
        $students[$id-1]['roll'] = $roll;
        $students[$id-1]['phone'] = $phone;
    
        $serialized = serialize($students);
        file_put_contents(DB, $serialized, LOCK_EX);
        return true;
    }
    return false;

 }

 function deleteStudent ($id){
    $getStudentData = file_get_contents(DB);
    $students = unserialize($getStudentData);

    unset($students[$id-1]);
    $serialized = serialize($students);
    file_put_contents(DB, $serialized, LOCK_EX);
 }


 function getNewId($studentId){
    // max is a function that it will count array's data which one is the maximum number
    // and array_column is work for multi-dimentional array that certain one column choose. then it will separate the particular column to create new array
    $maxId = max(array_column($studentId, 'id'));
    return $maxId + 1;
 }

 function is_admin() {
    return  isset($_SESSION['role']) && "admin" == $_SESSION['role'];  
 }

 function is_editor() {
    return  isset($_SESSION['role']) && "editor" == $_SESSION['role'];  
 }

//  function has_privilege() {
//     return (is_admin() || is_editor());
//  }

 
?>