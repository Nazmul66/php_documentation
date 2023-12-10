<?php
   // static is use for class without object call that it will direct the class name to get that static method name results

   class MathCalculator {
      private $number; 
      static $num;

      // static method
      static function fibonacci ($n) {
        // in static function that only call static method that is call for ( self::$num or self::factorial() )
         self::$num = $n; 
         echo "Fibonacci series is up to {$n} \n";
      }

      function factorials ($n) {
        $this->number = $n;
        self::$num = $n; 
        echo "Calculator factorial of {$n} \n"; 
      }

   }

$mathC = new MathCalculator(); 
$mathC->fibonacci(44);


MathCalculator::fibonacci(7);
echo MathCalculator::$num;

?>