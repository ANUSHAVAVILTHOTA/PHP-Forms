<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$keys=array("a","b","c","d","e");
$a1=array_fill_keys($keys, "apple");

print_r($a1);

echo "<br />";

// Array ( [a] => apple [b] => apple [c] => apple [d] => apple [e] => apple )


$a=array("a","b","c");
$a1=array_fill_keys($a, "apple");

print_r($a1);

//  keys array 
// value for all the keys

// Array ( [a] => apple [b] => apple [c] => apple )

function myfun($m){

	return $m>2;   

	//  1>2   false
	 //  2>2  false
	// 4>2   true 

}

echo "<br />";
$a2=array(1,2,4,3,5,1,6);  

$results=array_filter($a2,"myfun");

print_r($results);

echo "<br />";

function abc($q){  // 1 4 6 8 9 4 5 10 

      return $q>5;
}


$a3=array(1,4,6,8,9,4,5,10);   //>5

//6/8/9/10
$res=array_filter($a3,"abc");

print_r($res);
// Array ( [2] => 6 [3] => 8 [4] => 9 [7] => 10 )

// Array ( [2] => 4 [3] => 3 [4] => 5 [6] => 6 )
?>
</body>
</html>