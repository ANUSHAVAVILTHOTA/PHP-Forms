<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


// a1
// a b c d ==keys
//red green blue yellow  ==values


//a2
//e,f,g ==keys
//red green blue=== values


//to check the value ==diff
// it will give the values which are not present in the a2 array
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

print_r(array_diff($a1, $a2));



// Array ( [d] => yellow )  bcoz it is not in the a2 array

echo "<br />";

// both key and values
// "a"=>"red"
//"b"=>"green"
// "c"=>"blue"
// "d"=>"yellow"
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","f"=>"blue");

print_r(array_diff_assoc($a1, $a2));


// Array ( [c] => blue [d] => yellow )

echo "<br />";

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"purple");

print_r(array_diff_key($a1, $a2));

// Array ( [b] => green )

// b =>green



// Array ( [b] => green )


// comparing 2 arrays
// diff
//Keys   ==array_diff_key

//values  ==  array_diff

// keys and values  ==array_diff_assoc



echo "<br />";
$a1=array("a"=>"apple","b"=>"purple","c"=>"ABC","d"=>"lmn");
print_r($a1);
echo "<br />";
$result=array_flip($a1);
print_r($result);

//keys ====values
//values===keys

// Array ( [a] => apple [b] => purple [c] => ABC [d] => lmn )

// Array ( [apple] => a [purple] => b [ABC] => c [lmn] => d )
?>
</body>
</html>