<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// check the dates ===correct or not
// // 1 to 12
// 1 to 31
// 1 32767
//
// bool(true)
var_dump(checkdate(12, 29, 2004));
echo "<br/>";
$a=checkdate(12, 29,2004); //1 bool(true) //0 // bool(false)
echo $a; // 1 0

echo "<br/>";  // 20 feb 20 true
// 30 false  //m d y
var_dump(checkdate(2, 30, 2021));

echo "<br/>";  // 20 feb 20 true
// 30 false  //m d y
var_dump(checkdate(2, 21, 2021));

echo "<br/>";  
var_dump(checkdate(12, 31, -300));


echo "<br/>";  
var_dump(checkdate(2, 29, 2003)); // 28 days
// 1
//0
// we can able to add some intervals to the specific date
// or current date
echo "<br/>";  
$date=date_create("2013-03-15"); // created date
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");  // 04 -24

echo "<br/>";  
$date=date_create("2013-03-15"); 
date_add($date,date_interval_create_from_date_string("2 months"));
echo date_format($date,"Y-m-d");

echo "<br/>";  
$date=date_create("2013-03-15");  // +1 year
date_add($date,date_interval_create_from_date_string("1 year"));
echo date_format($date,"Y-m-d");


echo "<br/>";  
$date=date_create("2013-03-15"); 
date_add($date,date_interval_create_from_date_string("5 months"));
echo date_format($date,"Y-m-d");
echo "<br/>"; 
$d1=date_create_from_format("d-m-Y","05-03-2013");
// d= day of a month with leading zeros
echo date_format($d1,"Y/m/d"); // 01 02 03 

echo "<br/>"; 
// j == day of a month without zeros
echo date_format($d1,"Y/m/j"); // 1 2 3 4 5 
// 1 2 3 4 5 == without leading zero //j
// 01 02 03 04 05 === leading with zeros //d

echo "<br/>"; 
// D == Day of a month but the values are(Mon -Sun)
echo date_format($d1,"Y/m/d D"); // Fri Mon

echo "<br/>"; 
// l== Day of a month but the values are(Monday --Sunday)
echo date_format($d1,"Y/m/d l"); // Monday

// st nd rd th
// S English suffix of a day 
echo "<br/>"; 
echo date_format($d1,"Y/m/dS"); // st nd rd th
echo "<br/>";
$d1=date_create_from_format("j-m-Y","5-03-2013"); // 
echo date_format($d1,"Y/m/d");

// F-- month name (January -- December)
echo "<br/>";
echo date_format($d1,"Y/F/d");
// M -- (Jan --Dec)
//
echo "<br/>";
echo date_format($d1,"Y/M/d");
// m ===(01 -12) leading with zeros  01 02 03 04 05 06 07 08 09 10 11 12
echo "<br/>";
echo date_format($d1,"Y/m/d");

// n=(1-12) 1,2,3,4,5,6,7,8,9,10,11,12 without leading zeros
echo "<br/>";
echo date_format($d1,"Y/n/d");

//Y 2021 2013
echo "<br/>";
echo date_format($d1,"d/m/Y");

//y 2021 =21
// 2013 ==13
// 2020 ==20
// 2001 ==01
echo "<br/>";
echo date_format($d1,"d/m/y");
//N ISO-8601 numeric representation of a day (1- Monday)(2-T)(3-W)(7-Sunday)

echo "<br/>";
echo date_format($d1,"d/m/Y N");


//w ISO-8601 numeric representation of a day (0 -Sunday)(1 Mon) (6-Saturday)
echo "<br/>";// tuesday
echo date_format($d1,"d/m/Y w");  //0 -sun 1 mon 2 -tue

// h -hours i min  s--sec a am/pm
//a == am/pm
//A  == AM/PM
echo "<br/>";
echo date_format($d1,"Y/m/d h:i:sa");



echo "<br/>";
echo date_format($d1,"Y/m/d h:i:sA");

//z (0 365) ==total 366
// 52
echo "<br/>"; 
echo date_format($d1,"Y/m/d z");

//W ISO 8061 week number of a year  52
echo "<br/>"; 
echo date_format($d1,"Y/m/d W");

//t  total number of days in a given month
echo "<br/>"; 
// $d1=date_create_from_format("j-m-Y","5-02-2013");
echo date_format($d1,"Y/m/d t");
// L== to check leap year or not
// if leap year==1   not a leap year ===0

echo "<br/>"; 
echo date_format($d1,"Y/m/d L");
// Y== year number ==2013,2021
// o years ==ISO -8601 year number 2013 2014 2021  Y o
echo "<br/>"; 
echo date_format($d1,"Y/m/d o");

// g ==12 hours format (1 to 12)     ,1 ,2 ,3
// G ==24 hour format(0 23) ,    1,2====23
//h == 12 hours format (01 -12) ,   01 02 03 04 05...12
//H == 23 hours format( 00 to 23)== 00,01,02,----12

echo "<br/>"; 
echo date_format($d1,"Y/m/d g G h H");
?>


</body>
</html>