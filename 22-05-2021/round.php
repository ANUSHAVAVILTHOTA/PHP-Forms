<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// 0 means without any decimals  3 4
//1  one digit after the decimal point 2.3 4.5
//2 means 2 digits after the decimal  4.56 7.89
echo(round(9.5,0,PHP_ROUND_HALF_UP));  //9.5  == it will up by 0.5 =10

// 1.5  === 2
//-1.5 == -2
echo "<br />";
echo(round(9.5,0,PHP_ROUND_HALF_DOWN)); // down by 0.5 ==9

// 1.5 == 1
// -1.5 ==-1

echo "<br />";
// it will take the number without decimal 
// and start searching for near even number
echo(round(9.5,0,PHP_ROUND_HALF_EVEN));  // 10
// 1.5 == from 1== near is 2
// 2.5 == from 2 == near is  2

echo "<br />";
echo(round(9.5,0,PHP_ROUND_HALF_ODD));  //9 
// 1.5 =from 1== 1 is near odd number
// 2.5 =from 2== 3 is the near odd number
echo "<br />";
echo(PHP_ROUND_HALF_UP);//1
echo "<br />";
echo(PHP_ROUND_HALF_DOWN);//2
echo "<br />";
echo(PHP_ROUND_HALF_EVEN);//3
echo "<br />";
echo(PHP_ROUND_HALF_ODD);//4
?>
</body>
</html>