<!DOCTYPE html>
<html>

<body>

  <?php
$x =5;
$y =10;
// function myTest() {
//  global $x ; 
//   echo "<p>Variable x inside function is: $x</p>";
// } 
// myTest();

// function F1(){
// global $y;
//   $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
//   echo $y;
// }
// F1();
// echo "<p>Variable x outside function is: $x</p>";
// print"abcd";

//static keywor when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
//To do this, use the static keyword when you first declare the variable:
function myfun(){
  static $x=10;
  echo $x;
  $x++;
}
myfun();
echo "<br>";
myfun();
echo "<br>";
myfun();
echo "<br>";
?>

</body>

</html>