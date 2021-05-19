<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

// == 0
// s1 greater  >0
// s2 greater <0

//Hello as str1
// case sensitive  FALSE  captial!=small
// case in sen    TRUE    capital===small
// str1=Hello
// str2=Hello  ===0
//  str1=ello w
//  str2=Hello w   
echo substr_compare("Hello world", "Hello w",1,6,FALSE);

// 5
// 1==string
//2==sub str
//3 ==starting index position
// length of the string
// case  == TRUE,FALSE

echo "<br />";
// return the count of string or char in a main string
echo substr_count("Hellwo world is gh world kjx kjs world dj world world", "w");

echo "<br />";
$r="Abc blue green blue";
echo substr_count($r, "blue");
echo "<br />";

//0-H
//1=e
//2=l
//3-l
//4=o
//5=space
//6=w
//7=o
//8-r
//9-l
//10=d
//11=.
//12=space   1
//13=w
//14=o
//15=r
//16=l
//17=d
//18=space
//19=i
//20=s
//21=n
//22=i
//23=c
//24e
//substr_count(string,substring,start,length)
$r="Hello world. The world is nice";
echo substr_count($r, "world",13,13);  
echo "<br />";
$r="Hello world. The world is nice";
echo substr_count($r, "world",13,12);  
?>
</body>
</html>