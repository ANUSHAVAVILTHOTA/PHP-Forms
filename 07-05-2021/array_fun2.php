<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// small to Big
$a=array("Dog","Cat","Apple","Blue","Red","Yellow");

array_multisort($a);  // return value is 1

print_r($a);

echo "<br />";


// Array ( [0] => Apple [1] => Blue [2] => Cat [3] => Dog [4] => Red [5] => Yellow )


$b=array("Abc","LMN","Ksa","Jkl","Zer","Yjz");
array_multisort($b);
print_r($b);

// Array ( [0] => Abc [1] => Jkl [2] => Ksa [3] => LMN [4] => Yjz [5] => Zer )
echo "<br />";
$b=array(1,4,8,7,6,9);
array_multisort($b);
print_r($b);
// Array ( [0] => 1 [1] => 4 [2] => 6 [3] => 7 [4] => 8 [5] => 9 )

?>
</body>
</html>