<?php

include "config.php";

function getStatusMessage ($Status= 0) {
    $ErrorStatus = [
     '0' => '',
     '1' => 'Duplicate Email Address',
     '2' => 'Username or Password Empty',
     '3' => 'User create successfully',
     '4' => 'UserEmail and Password didn\'t match',               
     '5' => 'UserEmail doesn\'t exist',               
    ];

    return $ErrorStatus[$Status];
}

function getWords($user_id, $sort, $search=null) {
    global $connection; 
    $data = array();
    if($search){
        $sql = "SELECT * FROM word WHERE user_id = $user_id AND word LIKE '%$search%' ORDER BY word $sort";
    }
    else{
        $sql = "SELECT * FROM word WHERE user_id = $user_id ORDER BY word $sort";
    }
    $results = mysqli_query($connection, $sql);

    while ($_data = mysqli_fetch_assoc($results)){
         array_push($data, $_data);
    }

    return $data;
}

?>