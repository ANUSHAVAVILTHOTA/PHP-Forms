<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// array name  len

// 0= red 
// 1=green
//  2=yellow
// 3 =brown
// 4=orange
// random index value === 
$a=array("red","green","yellow","brown","orange");
//store generated random index values
$random_keys=array_rand($a,4);

print_r($random_keys);
echo "<br />";

// Array ( [0] => 0 [1] => 4 [2] => 2 [3] => 3 )

//       $random_keys[0]===0
//       $random_keys[1]===4
//       $random_keys[2]===2
//       $random_keys[3]===3

// access the generated random index values
echo $random_keys[0];
echo "<br />";
echo $random_keys[1];
echo "<br />";
echo $random_keys[2];
echo "<br />";
echo $random_keys[3];
echo "<br />";
// passing the index values to our original array
echo $a[$random_keys[0]];   // a[0]  ==red
echo "<br />";
echo $a[$random_keys[1]];  //a[4]  ==orange
echo "<br />";
echo $a[$random_keys[2]];  //a[2]== yellow
echo "<br />";
echo $a[$random_keys[3]];  //a[3]==brown
echo "<br />";

//  store index values
//  access index values
// pass those index values inside our original array

// return 5 ele  and insert   a value of "blue" to all the new elements
$s=array("red","green");   //2+7=9
print_r(array_pad($s,9,"apple"))
?>
</body>
</html>