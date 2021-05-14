<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

  $g= bin2hex("Hello World!");
  //48656c6c6f20576f726c6421  ==hex  =16
  echo $g;

  echo "<br />";
  echo pack("H*","48656c6c6f20576f726c6421");  //==16 to str
  

  // remove the chars from the right end of the string
echo "<br />";
  $str="Hello World! Apple blue";
  echo chop($str,"blue");  // 2nd param is optional
  //  \0=NULL
  //  \t ==tab space
  //   \n ==new lines
  // " " spaces  ordinary white space
    echo "<br />";

// use RSA Data Security Inc
    // string encription  //Anusha@123  e427781349ca3d67fccc20b8d7dd383b

    // developers cant able to see u r password
   $h="Anusha@123";
   echo md5($h);  // security purpose
 // 128 bit finger print or message format

echo "<br />";
   $d="SKV@123";
   echo sha1($d); // us hash secure algorithm

   //25e0b7a1774d6587e314ba8e93a7340eb2185ab

// sha1 and md5 both we are using for encryption purpose
   // mainly we are using for storing the passwords and imp files or docs
   // if we store like that then no one is able to identify u r personal details
   //even org also
echo "<br />";
print("Hello");
echo "<br />";
$e=array("ASsf","yjyg","ukg","hj");
echo join("ABC",$e);

?>
</body>
</html>