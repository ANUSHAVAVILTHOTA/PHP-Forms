<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

// absolute ===== number into positive

// |x|== -x or x ===x
// remove the  negative sign
echo abs(-8.7);  //8.7
echo "<br />";

echo abs(8.7);  //8.7
echo "<br />";

echo abs(-9);  //9
echo "<br />";

echo abs(6);  //6
echo "<br />";


echo abs(9);  //9
echo "<br />";

echo abs(-9);  //9
echo "<br />";


// max number in the array of values

echo(max(2,6,8,10,23));
echo "<br />";

echo(max(2,6,8,123,10,23));//123
echo "<br />";

echo(max(2,234,6,8,345,123,10,23));//345
echo "<br />";

// we can pass the list of values
// or we can pass in array format
echo(max(array(2,234,6,8,345,123,10,23)));//345
echo "<br />";

echo(max(array(2,6,8,123,10,23)));//123
echo "<br />";

// to identify min value 
echo(min(2,6,8,10,23));
echo "<br />";

$result=min(2,6,8,10,23);
echo $result;
echo "<br />";


echo(min(array(2,6,8,10,23)));
echo "<br />";

//3.141.. pi value 22/7


echo(pi());

// x power n
// x power -n     // 1/x power n
// 2 power -4
// 2,4   =16
// 2,-4  =1/16
// -2,4  = 2*2*2*2=16 === -16
echo "<br />";
echo pow(2,2);  //2*2

echo "<br />";
echo pow(2,3); //2*2*2

echo "<br />";
echo pow(-2,4);  //2*2*2*2=16
echo "<br />";
echo pow(3,2);  //3*3=9

echo "<br />";
echo pow(2,-4);  // x power -n  1/16
//  1\ x power n
// 1/16

// 1/16
// random numbers
// we can also specify the range
echo "<br />";
echo pow(3,-2);
//1/9 
echo "<br />";

echo(rand()); //10 random numbers

echo "<br />";
// 30 - 100  b/n
echo(rand(30,100));  // between 30  and 100

echo "<br />";

echo(rand(500,600));  // numbers between 500 and 600

echo "<br />";
// e 10 2
// base e  
echo log(2);
echo "<br />";

echo log(3);
echo "<br />";

echo log(2.7183);
echo "<br />";

echo log(9);
echo "<br />";
// x power n
// x,n +ve
// x +ve ,n=-ve  2 nd case
// x -ve ,n=+ve    -16   it will calculate 2 power 4..
// value is 16
// it will -ve sign before it
echo "<br />";
echo pow(2,4);  // 16  
   //5,2  =5*5 =25
echo "<br />";
echo pow(5,-2);  //   1/25 =0.04  
   //pow(x,n)
echo "<br />";
echo pow(-2,4);  // 16 = php       == -16  it is only in maths
echo "<br />";
echo(sqrt(16));
echo "<br />";
echo(sqrt(25));
echo "<br />";
echo(sqrt(81));
echo "<br />";

echo(round(0.60));
// FD after the . (decimal point) > =5 or not    6>=5
// TRUE   
     //number before the .(decimal point)   
      // add +1 to the number      0+1
// False
      // number before the .
       //0 

echo "<br />";

echo(round(1.70));
//   7>=5
//TRUE   1+1=2

echo "<br />";

echo(round(2.40));
// 4>=5
//FALSE  the number before the decimal point  2
   echo "<br />";

echo(round(22.80));
 // 8>=5
//TRUE  // number before dp  ==22+1===23
echo "<br />";

echo(round(8.76));
// 7>=5  
//TRUE  8+1=9

echo "<br />";

echo(round(8.35));
//  3>=5  
//FALSE   8

echo "<br />";

echo(round(765.35));
// 3>=5
//FALSE  the number before . ===765
//-4-1=-5
echo "<br />";

echo(round(-4.40));
// 4>=5
//FALSE -4

echo "<br />";

echo(round(-4.70));
// 7>=5
//TRUE  -4+(-1)=-5

// round with up ===ceil
// round numbers down  ==floor

echo "<br />";
echo(ceil(0.60));  //1

echo "<br />";
echo(ceil(0.40));  //1

echo "<br />";
echo(ceil(6));  //6


echo "<br />";
echo(ceil(1.2));  //2  number before .  1+1

echo "<br />";
echo(ceil(1.7));  //2   1+1

echo "<br />";
echo(ceil(2.34)); //3   2+1

echo "<br />";
echo(ceil(2.89)); //3   2+1

echo "<br />";
echo(ceil(7));   //7

// +ve float=== number before dot +1      ex:8.9
// int === number
 //-ve float === number before dot

echo "<br />";
echo(ceil(-5.1));  //-5

echo "<br />";
echo(ceil(-5.9)); //-5

echo "<br />";
echo(ceil(4.3));   // 4+1= 5

echo "<br />";
echo(ceil(4.7));   //4+1==5

echo "<br />";
echo(ceil(5));  //5

echo "<br />";
echo(ceil(-7.3));  //-7

echo "<br />";
echo(ceil(-7.9));  //-7

?>
</body>
</html>