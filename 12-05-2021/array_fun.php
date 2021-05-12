<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// count func will return totalno of ele inside the array
$a=array("apple","red","blue","green");
echo count($a);

echo "<br />";
$b=array("apple","red","blue","green","ljsd","sdcjh");
echo count($b);

// will return current ele=======first inserted ele
echo "<br />";
$c=array("apple","red","blue","green","ljsd","sdcjh");
echo current($c);

echo "<br />";
$d=array("blue","green","ljsd","sdcjh");
echo current($d);

// last ele== last inserted ele
echo "<br />";
$e=array("apple","red","blue","green","ljsd","abc");
echo end($e);
echo "<br />";

// current === first ele array
//next== it will point to the next ele ======green
$f=array("blue","green","red","yellow");
echo current($f);
echo "<br />";
echo next($f);  //green
echo "<br />";
echo next($f);  //red  
echo "<br />";
echo next($f); //yellow

$h=array("apple","red","blue","green","ljsd","");
echo current($h); //appleabc
echo "<br />";
echo next($f); //red
echo "<br />";
echo next($f);//blue

?>
</body>
</html>