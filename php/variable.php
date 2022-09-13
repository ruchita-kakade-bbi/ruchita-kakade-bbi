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

function F1(){
global $y;
  $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
  echo $y;
}
F1();
echo "<p>Variable x outside function is: $x</p>";
print"abcd";
?>

</body>

</html>