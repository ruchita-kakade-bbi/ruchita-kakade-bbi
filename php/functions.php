<?php
echo "----functions in php----";
//functions in php-Function names are NOT case-sensitive.
echo "<br>";
function test1($firstNmae ,$lastName){
    echo "My name is $firstNmae $lastName. ";
}
Test1("john","smith");
echo "<br>";

//PHP automatically associates a data type to the variable, depending on its value.
// Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
    function Test2(int $a ,int $b){
        return $a+$b;
    }
    echo Test2(10,"15 hours");
    echo "<br>";
echo "----PHP Default Argument Value----";
  echo "<br>";
    function setHeight(int $minheight = 50) {
     echo "The height is : $minheight <br>";
    }

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
  echo "<br>";

echo "----PHP Functions - Returning values---";
  echo "<br>";

    function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
    }

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
echo"<br>";
echo"-----Passing Arguments by Reference-----";
echo"<br>";

    function add_five(&$value) {
    $value += 5;
    }

$num = 2;
add_five($num);
echo "sum is : $num";
?>