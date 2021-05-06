<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// we can access keys from assoc arrays
$a=array("a1"=>"abc","a2"=>"jkdfv","a3"=>"dsf","a4"=>"sjdj");

print_r(array_keys($a));

// a1 a2 a3 a4   ==keys
// abc   jkdfv    dsf    sjdj=== values
// access keys  using array_keys function

// Array ( [0] => a [1] => b [2] => c [3] => d )


function myfun($y){  
	return($y*$y);  

}

$a1=array(2,3,4,5,6);
print_r(array_map("myfun", $a1));  



// Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 [4] => 6 )

// 2*2=4
// 3*3=9    1 st pos ==it will map that value
// 4*4=16   
// 5*5=25
// 6*6 =36

// Array ( [0] => 4 [1] => 9 [2] => 16 [3] => 25 [4] => 36 )

?>
</body>
</html>