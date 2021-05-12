<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// when we are in the middle of the array we can access prev ele by using prev fun

// next func we can traverse to front or
// it  will move its internal pointer
$h=array("apple","red","blue","green","ljsd","sas");
echo current($h); //apple
echo "<br />";
echo next($h); //red
echo "<br />";
echo next($h);//blue  2 nd position
// echo "<br />";
// echo prev($h);  //red

// it will reset all the values 
// again it will go back to the current position 
// that is first inserted ele
echo "<br />";
echo reset($h);
echo "<br />";
echo "<br />";
echo "<br />";
$k=array("apple","red","blue","green","ljsd","sas");
echo current($k); //apple
echo "<br />";
echo next($k); //red
echo "<br />";
echo next($k);//blue
echo "<br />";
echo next($k);//green  '
echo "<br />";
// apple
// red
// blue
// green

echo reset($k);



?>
</body>
</html>