<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

function coding($s1,$s2){
    return $s1."+".$s2;
}



$a=array("blue","cat","abc","lmn","xyz");
print_r(array_reduce($a, "coding"));

   // s1   s2
// '' blue
// cat abc
// lmn xyz

// array_reduce($a, "coding")

//arrayname
//user defined fun==========by creating this array we are going to reduce array to string
//initial value
echo "<br />";
function kp($a1,$a2){
	return $a1."-".$a2;
}

// apple-skv-id-name-lname-email

$b=array("skv","id","name","lname","email");
print_r(array_reduce($b, "kp","apple"));

// kp("apple"-"skv"-"id"-"name"-"lname"-"email")

echo "<br />";

$c1=array("red","blue");
$c2=array("yellow","green");

// Array ( [0] => yellow [1] => green )

print_r(array_replace($c2, $c1));

// Array ( [0] => red [1] => blue )
echo "<br />";

$d1=array("a","fg","rdfjk");
$d2=array("fdsjk","dfk","jksdf");

//  2 params
// both are array names
//   
print_r(array_replace($d1, $d2));


//  it will search for the value and it will return the key
$s=array("a"=>"eufsd","b"=>"sddf","c"=>"sdff");

// value which we want to search
// in which array we want to search
echo array_search("sddf", $s);   // b=sddf

echo "<br />";

// remove the 1 st ele  from the  array  
// this function will return the removed element
$s1=array("a"=>"eufsd","b"=>"sddf","c"=>"sdff");
echo array_shift($s1);  //eufsd
echo "<br />";
print_r($s1);  // Array ( [b] => sddf [c] => sdff )


echo "<br />";


//array name ,start index  , length, preserve 

$s=array("red","brown","purple","yellow","sdfkj","dfnm");
print_r(array_slice($s, 1,3,true));


// 0=red
// 1=brown
// 2=purple
// 3=yellow
// 4=sdfkj
// 5=dfnm
//     1                  2               3
// Array ( [0] => brown [1] => purple [2] => yellow )
// Array ( [1] => brown [2] => purple [3] => yellow )
?>

</body>
</html>