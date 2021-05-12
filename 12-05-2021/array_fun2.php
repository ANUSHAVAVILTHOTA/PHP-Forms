<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$arr=array("a"=>"apple","b"=>"green","c"=>"blue");

reset($arr);

while(list($key,$val)=each($arr)){  //"a"=>"apple"   //"b"=>"green"  //"c"=>"blue"
	echo "$key => $val"; 
    echo "<br />";
	 //\n same as break tag   
	// /t for tab space
}

echo "<br />";
// we can search values and we can display some output
$k=array("apple","red","blue","green","ljsd","sas");
if(in_array("red", $k)){
	echo "Match Found";
}
else{
	echo "Not Found";
}

echo "<br />";

$fname="gdht";
$lname="hjghg";
$age="87";
//  creating an array from variable names and their values
$results= compact("fname","lname","age");
print_r($results);

echo "<br />";
//  desc order according to the value  // large === small
$b=array("a"=>"67","b"=>"45","c"=>"97");  // 67 , 45 ,97    () 97 [a] => 67 [b] => 45 )

arsort($b);

print_r($b);

echo "<br />";

$c=array("a"=>"67","b"=>"986","c"=>"127","d"=>"897");  // 986 897 127 67
// Array ( [b] => 986 [d] => 897 [c] => 127 [a] => 67 )
arsort($c);

print_r($c);

//  Asc order according to the value  //   small=========large

$d=array("a"=>"67","b"=>"986","c"=>"127","d"=>"897");  
// Array ( [a] => 67 [c] => 127 [d] => 897 [b] => 986 )
asort($d);

print_r($d);
?>
</body>
</html>