<!DOCTYPE html>
<html>
<head>
	<title>Array Functions</title>
</head>
<body>
<?php

// 1*3*4*5=60
// print_r(expression)
$abc=array(5,5);
echo(array_product($abc));

echo "<br />";

// last element from the array 
$xyz=array("red","apple","hjs");

array_pop($xyz);

print_r($xyz);


echo "<br />";

$b=array("a","b","c","d","e");   //last ele
array_pop($b);
print_r($b);

echo "<br />";
//array push fun will add ele in the last
$c=array("apple","hsd","hjj","abc");
array_push($c, "blue","red","pink");
print_r($c);
echo "<br />";
$d=array("apple","kiwi","purple");  // good school
print_r($d);
echo "<br />";

// we can add the ele in to the array (last)
array_push($d, "good","school","key","sjbadbh");
print_r($d);
echo "<br />";
$e=array("a"=>"sdjk","b"=>"sjkj","c"=>"udsjd");
print_r($e);
echo "<br />";
// we can reverse all the elements
print_r(array_reverse($e));

?>
</body>
</html>