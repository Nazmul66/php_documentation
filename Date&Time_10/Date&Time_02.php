<?php
// this mean set our localtime and the documentation (https://www.php.net/manual/en/timezones.php)
 date_default_timezone_set('Asia/Dhaka');

 // (d,m,y) agulo holo choto hater deway date time math hisehe chole ashbe
//    echo date('d/m/y');

 // (D,M,Y) agulo holo boro hater deway date time kothay chole ashbe
//    echo date('D/M/Y');

// tarike ar pore jodi (th) bosate hoy tahole (d ar shathe S) add korte hobe
//  echo date("dS M, y");  

// puro mash ar nam ta dekhte chai seta (M ar bodole F hobe)
//  echo date("dS F, y"); 


// dekhte chai hour minute second koto hobe and 24 hour system dekhte hole arek hiseb and choto hater (a) mean p.m time or (A) mean boro hater P.M time
 echo date("dS F, y h:i:s A") . "\n"; 
// echo date("dS F, y H:i:s A"); 

// ata holo a bosor ar koto tomo din seta ber korar formula (z)
echo date("z");


// ai month koto tarik hobe ta dekhiye dewa
echo date("t");
?>