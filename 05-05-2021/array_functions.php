<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// array_chunk
// split the array in to multiple =2

$abc=array("abc","xyz","opq","ijk","lmn","tyi");

// 3

// 0==abc,xyz,opq

// 1=ijk,lmn,tyi


// 2

// 0==abc,xyz
// 1==opq,ijk
// 2=lmn,tyi




print_r(array_chunk($abc, 2));
echo "<br />";

// Array ( [0] => Array ( [0] => abc [1] => xyz [2] => opq ) [1] => Array ( [0] => ijk [1] => lmn [2] => tyi ) )
print_r(array_chunk($abc, 3));

echo "<br />";


$xyz=array("apple","kiwi","purple","red","blue","yellow");

print_r(array_chunk($xyz, 4));



// 0=="apple","kiwi","purple","red",
// 1=="blue","yellow"

// total ===2 arrays


// print_r(array_chunk($xyz, 3));

// 0=="apple","kiwi","purple",
// 1=="red","blue","yellow"


// total 2 arrays


// print_r(array_chunk($xyz, 2));

// 0="apple","kiwi"
// 1=="purple","red"
// 2==,"blue","yellow"


// total arrays are ==3

echo "<br />";
$xyz=array("apple","kiwi","purple","red","blue","yellow");

print_r(array_chunk($xyz, 3,true));




// 0=apple 1=kiwi 2=purple 3=red 4=blue 5=yelllow

//     0      1       2
// 0="apple","kiwi","purple"
  
//     0      1     2   
// 1="red","blue","yellow"



// true=====it will preserv the indexes instead of re indexing to 0,1,2---ect

//     0      1      2
// 0="apple","kiwi","purple"
//     3     4      5
// 1="red","blue","yellow"



// Array ( [0] => Array ( [0] => apple [1] => kiwi [2] => purple ) [1] => Array ( [0] => red [1] => blue [2] => yellow ) )


// //true  in the 3 rd parameters
// Array ( [0] => Array ( [0] => apple [1] => kiwi [2] => purple ) [1] => Array ( [3] => red [4] => blue [5] => yellow ) )

// Array ( [0] => Array ( [0] => apple [1] => kiwi [2] => purple [3] => red ) [1] => Array ( [0] => blue [1] => yellow ) )


// 0==apple .kiwi,purple,red
// 1=blue,yellow


// 0=apple,kiwi   ====== 2 values
// 1=purple,red
// 2=blue,yellow  

// === 3


// print_r(array_chunk($xyz, 3));


// 0=apple,kiwi,purple    ==    3 values
// 1=red ,blue,yelllow




// array name
// no of ele in each array (no of ele in the array) 

//      0      1      2
// 0=="apple","kiwi","purple"
//     0     1      2
// 1="red","blue","yellow"

// Array ( [0] => Array ( [0] => apple [1] => kiwi [2] => purple ) [1] => Array ( [0] => red [1] => blue [2] => yellow ) )

//    0    1
// 0=apple,kiwi
//    0     1
// 1=purple,red
//    0     1
// 2=blue,yellow

// Array ( [0] => Array ( [0] => apple [1] => kiwi ) [1] => Array ( [0] => purple [1] => red ) [2] => Array ( [0] => blue [1] => yellow ) )

?>
</body>
</html>