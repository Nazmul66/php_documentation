<?php
   $string = "Lorem ipsum dolor sit amet consecteturrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr adipisicing elit. Ipsum iusto, aut numquam ad laudantium cupiditate suscipit.";

   // it's mean full character 26 letters por por amon break down hobe
//    echo wordwrap($string, 26);

      // it's mean full character 26 letters por por word gulo break down hobe and kono letter jodi 26 or oi character ar beshi hoye thake tahole 3rd parameter ke bole dite hobe, je ki diye break korte chao and 4th parameter holo boolean true dite hobe. 
      echo wordwrap($string, 26, "\n", true);
?>