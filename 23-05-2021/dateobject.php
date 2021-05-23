<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
// d --represents the day of a month 01 - 31
//m == represents a month  01-12
// Y == represents year having 4 digits 2021,2020,2022
// l == represents the day of a week
echo date("Y-m-d"); //  based on server country

echo "<br/>";

echo date("Y/m/d"); 

echo "<br/>";

echo date("Y.m.d"); 

echo "<br/>";

echo date("l");
echo "<br/>";

echo date("Y@m@d"); 

echo "<br/>";

// H --- 24 hours format 00:23
// h---  12 hours format 01:12
// i ---- minutes leading with zeros 00 59  
// leading zeros 00 01 02 03 12 13
// without leading zeros 1 2 3 4 5
//s== seconds
//a == am pm
// based on our server country 
echo date("H:i:sa"); // 04:45:07pm
echo "<br/>";



?>



<!-- footer section in website -->
&copy; 2009-<?php echo date("Y") ?>
</body>
</html>
