<?php
   
   class Fund{
      private $fund;
      
      function __construct($initialFund) {
         $this->fund = $initialFund;
      }

      function addFund($money){
         $this->fund += $money;
         $this->deductFund(5);
      }

     private function deductFund($money){
        $this->fund -= $money;
     }

     function totalFund(){
        echo "Total fund is {$this->fund}\n";
     }
   }

$funds = new Fund(100);
// $funds->fund = 75;
$funds->totalFund();
$funds->addFund(10);
// $funds->deductFund(7);
$funds->totalFund();



?>