<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// time zone for for a location
echo date("h:i:s:a");

echo "<br />";

// mktime(hour,minute,second,month,day,year)
// using this function we can also create specific dates
$e=mktime(11,15,45,23,05,2020);
echo date("Y-m-d h:i:sa",$e);

echo "<br />";

// human readable date format strings ==  unix time stamp
// Jan 1 1970
// this funcion is not accurate
$d=strtotime("10:30pm April 14 2020");
echo date("Y-m-d h:i:sa",$d);

echo "<br />";
// tommorrow
// 10:30pm April 14 2020
// next sunday
// next saturday
// +3 months
// 65 days

// 23/05/2021  // 24/05/2021  // 25/05/2021
//2021-08-23    // 24/08/2021  // 25/08/2021
$d1=strtotime("tomorrow");
echo date("Y-m-d",$d1); //24
echo "<br />";

$d2=strtotime("next saturday");
echo date("Y-m-d",$d2);
echo "<br />";

$d3=strtotime("+3 Months");
echo date("Y-m-d",$d3);

echo "<br />";
$d4=strtotime("40 Days");
echo date("Y-m-d",$d4);

// next 6 saturdays dates

echo "<br />";

$startdate=strtotime("Saturday");  // May 29
// May 29 - Jun 5
// Jun5 - Jun 12 
// Jun12 june 19
// Jun 19- jun 26
//jun 26- july 3
// july 3 -july 10
$enddate=strtotime("+6 weeks",$startdate); //July 10
// m== 01-02-03===12
//M= Jan,Feb,Mar,Apr===Dec
// (May 29 <july 10 
// jun5<july 10
//june 12>july 10
///-------
// july10 < july 10 == false
while($startdate<$enddate){
	echo date("M d",$startdate); // May 29 //june 5 // jun 12 //jun 19 // jun 26// july 3
	echo "<br/>";
	$startdate=strtotime("+1 week",$startdate); // Jun 5 // jun 12 // jun 19 // jun 26 //july 3 //july 10
}


?>
</body>
</html>