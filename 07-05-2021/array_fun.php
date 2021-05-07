<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//  return un matching 
// array_diff    == values
//arrauy_diff_key   === keys
//array_diff_assoc un matches  == both keys and values



// return matches
// compare the values of 2arrays and it will return the matches

$b1=array("a"=>"blue","b"=>"red","c"=>"purple");
$b2=array("e"=>"red","f"=>"blue");




$results=array_intersect($b1,$b2);  //red and blue
print_r($results);

echo "<br />";

$b1=array("a"=>"blue","b"=>"green","c"=>"yellow");
$b2=array("e"=>"yellow","f"=>"green");

// blue green yellow

// Array ( [b] => green [c] => yellow )

$results=array_intersect($b1,$b2);
print_r($results);


echo "<br />";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");


// Array ( [a] => red [b] => green [c] => blue )

$res=array_intersect_assoc($a1, $a2);
print_r($res);

echo "<br />";



// a b c d

// a b c 

// "a"=>"red","b"=>"green","c"=>"blue"

$results=array_intersect_key($a1, $a2);
print_r($results);





?>
</body>
</html>