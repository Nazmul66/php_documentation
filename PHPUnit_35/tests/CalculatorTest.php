<?php

use PHPUnit\Framework\TestCase;
// require "../src/Calculator.php"; // phpUnit a (../) use na kore direct root file path use korte hobe
require "src/Calculator.php";

  class CalculatorTest extends TestCase{
    
      private $calc;
      protected function setUp():void{
        $this->calc = new Calculator(); 
      }

      function testSubtracts () {
        $result = $this->calc->subtract(10,5);
        $this->assertEquals(5, $result);

        $result = $this->calc->subtract(18,5);
        $this->assertEquals(13, $result);
      }

      // using Php DocBlocker adding function before use ( public static ) because it can recognized the function
       public static function dataProviderUsingMultiply() {
          return [
             [7,8,56],
             [7,5,35],
             [10,9,90],
          ];
      }

            
      /** @dataProvider dataProviderUsingMultiply  */
      function testMultiply ($a, $b, $expected) {
        $result = $this->calc->multiply($a, $b);
        $this->assertEquals($expected, $result);
      }

      function testAdd () {
        $result = $this->calc->add(5,9,7,3);
        $this->assertEquals(24, $result);

        $result = $this->calc->add(14, 8);
        $this->assertEquals(22, $result);
      }

  }

?>