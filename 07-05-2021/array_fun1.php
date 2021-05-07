<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$a=array("Abc"=>"hjbhj","xyz"=>"hjhb","lmn"=>"hjhbh");


// keys   yes it is exists
// Abc
// xyz
// lmn

// other value  === sorry its not!!!
if(array_key_exists("opq", $a)){
	echo "yes it is exists";
}
else{
	echo "sorry its not!!!";
}

$b=array("a"=>"apple","blue"=>"red","green"=>"yellow");

if(array_key_exists("blue", $b)){
	echo "yes it is exists";
}
else{
	echo "sorry its not!!!";
}

$a1=array("red","yellow","abc","tap");
$a2=array("blue","purple");

// Array ( [0] => red [1] => yellow [2] => abc [3] => tap [4] => blue [5] => purple )
print_r(array_merge($a1,$a2));
echo "<br />";

$b1=array("a"=>"red","b"=>"green");
$b2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($b1,$b2));

echo "<br />";
print_r(array_merge_recursive($b1,$b2));
// Array ( [a] => red [b] => yellow [c] => blue )

// Array ( [a] => red [b] => Array ( [0] => green [1] => yellow ) [c] => blue )

// array_merge
// 2 or more elements have the same key then it will overides the value
// array_merge_recursive
// instead of override  it will makes the values as an array

echo "<br />";
$c1=array("apple"=>"dsh","orange"=>"sadnm","kiwi"=>"dkjs");
$c2=array("apple"=>"chxv","abc"=>"dbs","orange"=>"khxcbj");

print_r(array_intersect_key($c1, $c2));
// Array ( [apple] => dsh [orange] => sadnm )
?>
</body>
</html>