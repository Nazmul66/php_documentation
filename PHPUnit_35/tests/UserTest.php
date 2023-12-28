<?php

use PHPUnit\Framework\TestCase;
require "src/Users.php";  // new update must added that namespace users file
use App\Users;


class UserTest extends TestCase {
    private $user;
    protected function setUp():void{
      $this->user = new Users();  // Use the correct namespace
    }

    function testSayHi() {
        $result = $this->user->sayHi();
        $this->assertEquals("Hi", $result);
    }

    // DocBloger use koray kono function lekhar age test use na kore function automatically run kortese
    /** @test */ 
    function setSave(){
        $result = $this->user->save();
        $this->assertEquals("hello", $result);
    }
}

?>