<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php


// 4 rows 4 columns

$a=array(
	 array(
         "id"=>123,
         "name"=>"abc",
         "last_name"=>"xyz",
         "school"=>"hgsd",
	 ),
     array(
         "id"=>678,
         "name"=>"abcd",
         "last_name"=>"xyza",
          "school"=>"hgsd",
	 ),
	  array(
         "id"=>679,
         "name"=>"abcde",
         "last_name"=>"xyzab",
         "school"=>"hgsd",
	 ),
	  array(
         "id"=>679,
         "name"=>"abcde",
         "last_name"=>"xyzab",
         "school"=>"hgsd",
	 ),

);

//we  can access values from specific column
$b=array_column($a,"last_name");

print_r($b);

//  we can access the specific col from mul arrays
// $result=array_column($a, "last_name");

// print_r($result);

// echo "<br />";

// $result=array_column($a, "id");

// print_r($result);

// echo "<br />";

// $result=array_column($a, "name");

// print_r($result);
// echo "<br />";

// $result=array_column($a, "school");

// print_r($result);






?>
</body>
</html>