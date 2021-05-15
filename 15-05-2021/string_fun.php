<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

// strtr fun will replace the chars ia in the string into  eo

echo strtr("Hilla warld", "iadH", "eokj");


echo "<br />";

// a,b,c ,d====z  small
//A,B,C,D,E===Z   capitals
// case -insensitive   A and a both are same
// case -sensitive   == A and a both are diff

// str_ireplace == case -insensitive

// it will replace orange with red
//orange
//ORANGE
//Orange
//ORAnge
// we can replace words with new words
echo str_ireplace("ORANGE", "Red", "Hello Apple orange");
//same   captital and small are same

echo "<br />";

echo str_ireplace("ORANGE", "Red", "Hello Apple oranGe");

echo "<br />";

$str="Hello World";
echo strlen($str);  //11 =14
echo "<br />";
// Hello WorldSSSSSSSSSSSSSS

echo str_pad($str, 25,"S");
echo "<br />";
// we can pad the right side of the string to new chars to new length
$s="DSFCN dshkb dsj";
echo str_pad($s, 40,"PLIsahdvdsjbk");  // len of return string would be 2 nd param
echo "<br />";
// function will repeats a string with a specified number of times

echo str_repeat("Orange", 7);

echo "<br />";

//case -sensitive  O and o both are diff 
//diif
//ORANGE
//Orange
//OranGE

echo str_replace("oranGe", "Red", "Hello Apple oranGe");

?>
</body>
</html>