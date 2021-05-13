<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$a=array("apple","blue","red","yellow","orange");

$clen=count($a);  //3

for($x=0;$x<$clen;$x++){
	echo $a[$x];
	echo "<br />";
}

// randomize the order of the ele inside the array
shuffle($a);

print_r($a);
echo "<br />";
echo sizeof($a);  // count of elem  
 
// sizeof and count  both fun are same
// both will return total no of ele

$b=array("a"=>"apple","b"=>"abc","c"=>"lmn");
extract($b);
// all the keys AS variables  a b c as variables
echo "<br />";
echo $a; //apple
echo "<br />";
echo $b;  // abc
echo "<br />";
echo $c;  //lmn
?>
</body>
</html>