<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

//  array_values == we can access values from the array
// array_keys === we can access keys from the array
$a=array("NAme"=>"shbh","id"=>"jkdskj","age"=>"66","color"=>"jkd");
print_r(array_values($a));

echo "<br />";

print_r(array_keys($a));

echo "<br />";


// applies user defined function to every ele of an array

function myfunction($value,$key){
	echo "The Key $key has value $value <br/>";

	echo "The KEy".$key."Has Value".$value."<br />";


}
$b=array("NAme"=>"shbh","id"=>"jkdskj","age"=>"66","color"=>"jkd");

array_walk($b, "myfunction");

//  this function can work with deeper assoc array
// (an array inside other array)

function myfun($value,$key){
	echo "The Key $key has value $value <br/>";

}

echo "<br />";
echo "<br />";
echo "<br />";
$c=array("sjkj"=>"shbh","id"=>"jkdskj","age"=>"66","color"=>"jkd");
$d1=array($c,"abc"=>"ahsh","xyz"=>"dhf");
// d1 having another array inside it =======$c
array_walk_recursive($d1, "myfun");

// The Key sjkj has value shbh
// The Key id has value jkdskj
// The Key age has value 66
// The Key color has value jkd
// The Key abc has value ahsh
// The Key xyz has value dhf

?>

</body>
</html>