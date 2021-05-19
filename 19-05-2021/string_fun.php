<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// s s s 
// from that position it will return entire str
$s="This his a test";
$first=strchr($s,'h');

echo $first;

echo "<br />";
// last acc

// s    s   s
$s="This is a test dej";
$last=strrchr($s,'is');

echo $last;

// first
// r ==last
// i== case insen
// without i== case sen
echo "<br />";
$d="This is abc ndh";
$first=strchr($d,'abc');

echo $first;

echo "<br />";

$d="This is abc ndh abc lmn ijk";
$first=strrchr($d,'abc');

echo $first;

echo "<br />";
// const
// A=65
// B=66
//D=68
//E=69
//F=70

// ====== Z=90

//a==97
//b==98
//c==99
//d=100
//e=101
//==========z=127
//last acc
echo strrchr("Hello AWorld","A");
echo "<br />";

echo strrchr("Hello AWorld",65);
echo "<br />";
//R-L
echo strrev("Hello World!!");//!!dlroW olleH
echo "<br />";
echo strrev("XYZ");//ZYX
echo "<br />";

// 0-H
// 1-e
// 2-l
// 3-l
// 4=o
// 5-space
// 6=w
// 7=o
// 8=r
// 9=l
// 10=d
// we can extract part of the main str
// first p==str
// 2nd ===starting index position
// length of output string
// we can extract substrings
// worl
echo substr("Hello world",6,4);
echo "<br />";
//Hello
echo substr("Hello world",0,5);
echo "<br />";

// world=====5
echo substr("Hello world",6,5);
echo "<br />";
// ello===4
echo substr("Hello world",1,4);
echo "<br />";

// ltrim 
//  whitespce  or predefined chars from the left of the string
echo "Apple";
$str="<br/>"."Hello blue red green World";
echo $str;
echo ltrim($str,"Hello");
// to remove the words from the left end
// white spaces
// we can remove new lines 
// break lines
echo "<br />";
$f="<br />ABC asjb sajd XOsajk";
echo ltrim($f,"<br />ABC as");

echo "<br />";
$str="Hello blue red green World";
echo rtrim($str,"ld");
echo "<br />";
$sr1="Hello World!";
echo trim($sr1,"Hed!");
?>
</body>
</html>