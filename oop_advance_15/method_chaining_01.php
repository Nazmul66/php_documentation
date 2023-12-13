<?php

class StringUtility{
    private $string;
    private $search;

    function __construct($string)
    {
        $this->string = $string;
    }

    function search ($string) {
        $this->search = $string;
        return $this;
    }

    function replace($string) {
        $this->string = str_replace($this->search, $string, $this->string);
        return $this;
    }

    function uppercase () {
        $this->string = strtoupper($this->string);
        return $this;
    }

    function lowercase () {
        $this->string = strtolower($this->string);
        return $this;
    }

    function print () {
        echo $this->string;
    }
  
}

// first way get result's
$S = new StringUtility("hello world");
// $S->search("hello");
// $S->replace("hi");
// $S->search("world");
// $S->replace("earth");
// $S->uppercase();
// $S->print();

// seconde way get result's using method chaining
// $search = $S->search("hello");
// $replace = $search->replace("hi");
// $uppercase = $replace->uppercase();
// $lowercase = $uppercase->lowercase();
// $result = $uppercase->print();


// final way easiest results
$S->search("hello")->replace("hi")->search("world")->replace("earth")->uppercase()->lowercase()->print();
?>
