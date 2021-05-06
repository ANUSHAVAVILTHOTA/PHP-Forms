<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


// 1 st ===starting index  0,1,2,3,4,5,6,---------------
// 2nd =========no of elements
//  value
$a1=array_fill(3,4,"xyz");
print_r($a1);


echo "<br />";

$a1=array_fill(2,5,"xyz");
print_r($a1);

echo "<br />";

$a1=array_fill(1,4,"abc");
print_r($a1);


// Array ( [1] => abc [2] => abc [3] => abc [4] => abc )

// Array ( [2] => xyz [3] => xyz [4] => xyz [5] => xyz [6] => xyz )


// Array ( [3] => xyz [4] => xyz [5] => xyz [6] => xyz )

?>
</body>


</html>