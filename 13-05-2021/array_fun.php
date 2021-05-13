<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// array("a"=>"sd","b"=>"shd")  //ass array
// array("dskj","hsd",88,"jd")  //normal array
// asso
// key and values


// arsort($c);  // descending order of values   large==small
// asort($d);   //asc order of values  small ==large
// krsort($b);// descending order of keys
// ksort($c);  // asc order of keys
//sort($s);  // asc order for normal arrays
// rsort   //des

// with r means dec order

// arsort  == a means that is for sorting values
//krsort  == k means that is for sorting the keys
//rsort  == normal array

// without r asc order

//asort   == a means that is for sorting values
// ksort  =k means that is for sorting the keys
//sort  == normal array


// descending order of keys    large===small   89 67 98 

// 98 89 67
$a=array("blue"=>"67","red"=>"6346","abc"=>"dfnm");
krsort($a);

// blue red abc
//red  blue abc
print_r($a);

echo "<br />";

// 98 89 67
$b=array("87"=>"67","97"=>"6346","65"=>"dfnm");

// 87 97 65 ==keys
// 97 87 65   larhge====small
// Array ( [97] => 6346 [87] => 67 [65] => dfnm );
krsort($b);

print_r($b);

echo "<br />";
// small ==big
// Array ( [65] => dfnm [87] => 67 [97] => 6346 )
$c=array("87"=>"67","97"=>"6346","65"=>"dfnm");
// 87 97 65==keys
//65 87 97
ksort($c);
print_r($c);
echo "<br />";
echo "<br />";
echo "<br />";
// using list() we can assign values to a list  of variables  ==in one operation
$h=array("apple","green","age");

list($a,$b,$c)=$h;
echo $a; //apple
echo "<br />";
echo $b; // green
echo "<br />";
echo $c; //age
echo "<br />";

$k=array("abc","sdhc","sdk","asdh");
list($l,$m,$n,$z)=$k;
echo $l;
echo "<br />";
echo $m;echo "<br />";
echo $n;echo "<br />";
echo $z;echo "<br />";

// current ele=== first inserted element
//current() and pos()
$g=array("purple","orange","red","blue");
echo pos($g);
echo "<br />";

// it will create an array of ele from 0 to 7
// 0  10======1,2,3----10

$number=range(0,15);
print_r($number);
echo "<br />";

// sort ===sort values in ascending order ==small big
$s=array(12,45,23,67,56,89);
sort($s);

// Array ( [0] => 12 [1] => 23 [2] => 45 [3] => 56 [4] => 67 [5] => 89 )
print_r($s);

echo "<br />";

$l=array("abc","car","blue","sch");
sort($l);

// Array ( [0] => abc [1] => blue [2] => car [3] => sch )

print_r($l);
echo "<br />";
$s=array(12,45,23,67,56,89);
// Array ( [0] => 89 [1] => 67 [2] => 56 [3] => 45 [4] => 23 [5] => 12 )
rsort($s);
print_r($s);
echo "<br />";

?>
</body>
</html>