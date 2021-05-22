<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
</body>

<?php

// integer division
// 5/2== 2.5
// 5/4 ==1.25

// 3.4 5.6 78.9
// 3 5 78 
echo intdiv(8, 4);  // 8/4 =2 
echo "<br/>";
echo intdiv(5, 2); // 5/2=2.5 == value without decimals =2

echo "<br/>";
echo intdiv(5, 4); //1.25   ===1    leave .25

echo "<br/>";
echo intdiv(-5, -2);  //-5/-2 =2.5 == 2 leave .5

//20/4 ==0
// 20/3== 2
// 15/6==3
// 10/3=1
// output is reminder value 
echo "<br/>";
echo(fmod(20, 4));//0
echo "<br/>";
echo(fmod(20, 3));//2
echo "<br/>";
echo(fmod(15, 6));//3
echo "<br/>";
echo(fmod(10, 3));//1

// nearest down integer

// if the value +ve float number ==then take the number without decimals
// normal int number like 4,5===then also take the number as it is
// -ve float number == then take -ve number without decimals then add -1
echo "<br/>";
echo(floor(0.60));  //0
echo "<br/>";
echo(floor(0.40));//0
echo "<br/>";
echo(floor(5));  //5
echo "<br/>";
echo(floor(5.1));//5
echo "<br/>";
echo(floor(-5.1)); // -5-1 ==-6
echo "<br/>";
echo(floor(-5.9));// -5-1  =-6

// +ve float number= number before the dot
// int == take the number as it is
// -ve float= take the -ve number before the dot then add -1
//  -6-1 =-7
//  -6-1=-7
echo "<br/>";
echo(floor(1.60));  //1
echo "<br/>";
echo(floor(2.40));  //2

echo "<br/>";
echo(floor(9));  //9

echo "<br/>";
echo(floor(-6.8));//-7
echo "<br/>";
echo(floor(-6.2));//-7

echo "<br/>";
echo(floor(7.60));  //7
echo "<br/>";
echo(floor(89.40));//89
echo "<br/>";
echo(floor(-67.8));  //-68

// explode ==  split the string into array  == str->array
// implode === join the array into string   == array->str
echo "<br/>";
$r=array("Hello","World","HAve","a","Good","Day");
echo implode("* " , $r); // we can join array elements into string
echo "<br/>";
$str="Hello World Have a good Day";
print_r(explode(" ", $str));

?>

</body>
</html>