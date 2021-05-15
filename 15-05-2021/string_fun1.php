<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// encoding and decoding

// A,B,-------Z total 26

echo str_rot13("Hello Worly");       

echo "<br />";
// H+13  ==U
// e+13  ==r
// l+13
//y+13

// 1 I   f  m  z
// 2 J   g  n  a
// 3 K   h  o   b
// 4 L   i   p  c
// 5 M      q  d
// 6 N     r   e
// 7 O    s   f
// 8 P    t  g
// 9 Q    u  h
// 10 R   v  i
// 11 S   w  j
// 12 T    x  k
// 13 U   y   l
echo str_rot13("Uryyb Jbeyq");   
// u+13

// it will consider 13 th char from u
echo "<br />";
// str1 str2
//case -in sen 
//str1==str2
echo strcasecmp("Hello World!", "Hello world!");  //0
echo "<br />";
//str1  > str2
echo strcasecmp("Hello world!ABc", "Hello World!");  //3
echo "<br />";
//str1  < str2
echo strcasecmp("Hello world!", "Hello World!ABC");  //-3

// equal then output is zero
//str1  > str2 == >0  1,2,3,4,5
//str1  <  str2  ==<0  -1,-2,-3
echo "<br />";  //case sen
echo strcmp("Hello world!", "Hello world!");
echo "<br />";  

// case sen
// it will find the first accurance of the word and then it will return rest of the string
echo strchr("Hello Apple blue red green Apple dscbj","blue");
echo "<br />";  
echo strstr("Hello Apple blue red green Apple dscbj","blue");

echo "<br />";  
//case  insen
echo stristr("Hello Apple blue red green Apple dscbj","Blue");
?>
</body>
</html>