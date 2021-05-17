<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


// it will return count of chrs before the specific char
// prev chars count
//spaces all spl symbols
echo strcspn("Hello World", "r");

echo "<br />";

echo strcspn("abcd efghi lmn xyz", "e");

echo "<br />";

// remove the html tages 
// and it will display only the content
echo("<h2>Apple sadh askjdb</h2>");
echo "<br />";
echo strip_tags("<h1>Apple sadh askjdb</h1>");
echo "<br />";
echo strip_tags("<b>Apple sadh askjdb</b>");

echo "<br />";
echo strip_tags("<strong>Apple sadh askjdb</strong>");

echo "<br />";
echo strip_tags("<p>Apple sadh askjdb</p>");
echo "<br />";
// it will remove slashes added by addcslashes
// i will remove backslashes
echo stripcslashes("H\ell\o  W\orl\d");
echo "<br />";

// slashes before the "
//or  remove the slashes added by addslashes fun
echo stripslashes("Who \'s eyg efhk");

echo "<br />";

// first it will search for the char
// from first accurance position it will resturn rest of the string
echo strpbrk("ABCD XYZ LMN LCGJSOPQ", "LPQ");  //CD XYZ LMN
echo "<br />";
//XYZ LMN LCGJSOPQ
//
echo strpbrk("ABCD XEFGH XIJKL MNOP", "X");
// IJKL MNOP
// XEFGH -----P
// first acc  XEFGH-----P

echo "<br />";
//XYZ LMN LCGJSOPQ
//
echo strpbrk("ABCD XEFGH DXIJKL MNOP", "DLK");
//D XEFGH XIJKL MNOP

echo "<br />";

//
echo strpbrk("ABCD XEFGH DXIJKL MNOP", "NX");
//NOP
//XEF...P
// search for coding and it will return first acc index position
echo "<br />";
// 0-I
// 1-space
// 2-l
// 3-i
// 4-k   
// 5-e
// 6-space
// 7-c
// it will search for the word
// it will consider the first char index position
echo strpos("I like coding sjkdb like coding","like");  //

echo "<br />";
echo strrpos("I like coding sjkdb like coding like","like");

echo "<br />";

echo strpos("Hello world", "Hello");

// 0-H
//1=e
//2=l
//3-l
//4-o
//5=space
//6 =w    ====here the world is found

// search for el
// if it is found 
// then consider first char index position ===e

// w =====6

// l=====  2

//w====6

//H===0
// H===0
//o ==== 4

echo "<br />";

// llo
// first accu of a word ===return index
echo strpos("Apple Hello world llo rld", "rld");
// 0-A   0,1,2,3,4==Apple ==0
//1-p   1,2,3==ppl  ==1
//2-p
//3=l    3,4 ==le ==3
//4-e
//5=space
//6-H  // 6,7,8,9,10==Hello ===6
//7-e
//8-l  -- 8,9,10==llo
//9-l
//10-o
//11-space
//12=w  // 12,13,14,15,16==world =12
//13=o  // 13,14,15,16===orld ==13
//14=r  // 14,15,16===rld ==14
//15=l
//16-d
//17=space
//18=r
//19=l
//20=d



// p= l
// H==6
// l=3

//e==7

//l==8
echo "<br />";
// last accu of a word ====it will return index position
echo strrpos("Apple Hello world llo ppl wor wor", "wor");
// 0-A
//1-p
//2-p  2,3,4==ple   2
//3=l
//4-e
//5=space
//6-H
//7-e
//8-l  
//9-l
//10-o
//11-space
//12-w 12,13,14,15,16==world ===12    12,13,14 ==w,o,r ===12
//13-o
//14-r
//15=l
//16=d
//17=space
//18=l  ===18,19,20===llo 18
//19=l
//20=0
//21=p
//22=p
//23=l
//24 =space
//25 w   25,26,27====25
//26 o
//27 r\
//28 =space  29,30,31==wor  29
//29 w   
//30 o
//31 r

?>
</body>
</html>