<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

// 1+5+6+8+9+10=39
//fun will return  sum of all values
 $arr=array(1,5,6,8,9,10);
 echo array_sum($arr);


//array_splice(array,start,len,array)
 $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
 $a2=array("a"=>"purple","b"=>"orange");

 array_splice($a1,1,2,$a2);
// remove and replace specified ele of the array

 // in which array we want to replace === a1
 //  starting index
 // length 
 // new elements array 
// "a"=>"purple","b"=>"orange","c"=>"blue","d"=>"yellow"
// Array ( [0] => purple [1] => orange [c] => blue [d] => yellow )

// "a"=>"red","purple","b"=>"orange","d"=>"yellow"

 // Array ( [a] => red [0] => purple [1] => orange [d] => yellow )
 print_r($a1);

echo "<br />";
 $b1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"abc");
 $b2=array("a"=>"purple","b"=>"orange","c"=>"hdj");

// Array ( [a] => red [0] => purple [1] => orange [2] => hdj [e] => abc )

 // we are replacing with new elements
 array_splice($b1,1,3,$b2);
 print_r($b1);


//slice==== we can extract some of the elem from the array
 //splice ====we can replace some of the elem with new elem

// remove the duplicate values  from the array
 echo "<br />";
 $c1=array("a"=>"red","b"=>"green","c"=>"red","d"=>"green","e"=>"apple");
 print_r(array_unique($c1));

// Array ( [a] => red [b] => green )
// Array ( [a] => red [b] => green [e] => apple )
// shift==== we can  remove first ele
 //unshift===add one or more elements in the beginning of the array


  echo "<br />";
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue","purple","orange");
print_r($a);
 echo "<br />";
// Array ( [0] => blue [1] => purple [2] => orange [a] => red [b] => green )
$b=array("a"=>"red","b"=>"green","c"=>"hdh");
array_shift($b);
print_r($b);

// Array ( [b] => green [c] => hdh )
?>
</body>
</html>