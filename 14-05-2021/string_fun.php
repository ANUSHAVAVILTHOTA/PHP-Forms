<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
// this fun will add backslash before the character
$s=addcslashes("Hello World", "e");
echo($s);

echo "<br />";
$g=addcslashes("ABC DEFG", "D");
echo($g);


echo "<br />";
$h=addcslashes("dsjk lsdzkab", "l");
echo($h);
echo "<br />";

// this will add backslash before the double quot "
$k=addslashes('what does "code" mean??');
echo($k);

echo "<br />";

// this fun split the string and then after each char it will add .
$str="Hello World!";
echo chunk_split($str,1,"ABC");
echo "<br />";
echo chunk_split($str,2,".");
echo "<br />";
echo chunk_split($str,3,".");

echo "<br />";
$r="Hello World";
// all characters into lowercase
echo strtolower($r);
echo "<br />";
$u="Hello World";
//we can convert all the chars to upper case
echo strtoupper($u);

echo "<br />";
$t="Hello Wprld!";
// first word from the str
// first char from the str  ===H into h
echo lcfirst($t);
echo "<br />";
$y="DSJCDS SDMK SDKA SAID";
// first word from the str
// first char from the str  ===H into h

//or first char of the str
echo lcfirst($y);
echo "<br />";
$x="dskj sdfjc sdjk SDRN";
echo ucfirst($x);
echo "<br />";

// it will convert firts character of each world into uppercase
$v="hello world dcbj sdjk sskhd";
echo ucwords($v);
echo "<br />";
echo strlen("Sadj ,.bkds"); //len of str 

echo "<br />";

// shuffle all the chars inside the str
$f="Hello World";
echo str_shuffle($f);

echo "<br />";

$g="HELLO Apple";

print_r(str_split($g));
//split the str into array
// binary ==2
//octal  ==8
//hex  ==16
//number=10
//12 ==


?>
</body>
</html>