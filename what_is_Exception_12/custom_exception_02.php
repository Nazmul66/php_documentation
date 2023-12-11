<?php

class myException extends Exception{};
class networkException extends Exception{};

function testException () {
    throw new myException();
}

try{
    testException();
    // echo "working \n";
}
// catch(Exception $e){
//     echo "Exception Caught";
// }
catch(myException $e){
    echo "myException Caught";
}
catch(networkException $e){
    echo "myException Caught";
}

?>