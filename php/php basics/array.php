<?php
$cars =array("BMW","jaguar","audi");
var_dump($cars);
echo"<br>";
    $cars1 = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars1[0] . ", " . $cars1[1] . " and " . $cars1[2] . ".";
    echo "<br>";
    echo count($cars1);
echo"<br>";

echo "-----Loop Through an Indexed Array-----";
echo"<br>";
$arrlength =count($cars1);
    for($x=0;$x<=$arrlength;$x++){
        echo $cars1[$x];
        echo "<br>";
    }
echo"<br>";

echo "-----Loop Through an Indexed Array-----";
echo"<br>";
$age =array("peter"=>"35","Ben"=>"38","john"=>"35");
    echo "peter is ". $age['peter'] . " years old...";
echo"<br>"; 
echo"<br>";

echo "-----Loop Through an Associative Array-----";
echo"<br>"; 
echo"<br>";
    foreach($age as $x=>$val){
       echo "Key=" . $x . ", Value=" . $val;
        echo"<br>";
    }   
    echo "<br>";
//Multidimensional Arrays
//PHP supports multidimensional arrays that are two, three, four, five, or more levels deep.
// However, arrays more than three levels deep are hard to manage for most people.
echo" ----Two-dimensional Arrays-----";
echo "<br>";
 $cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
    );
echo $cars[0][0]." :in stock: ".$cars[0][1] . ", sold: ".$cars[0][2]."<br>";
echo $cars[1][0]." :in stock: ".$cars[1][1] . ", sold: ".$cars[1][2]."<br>";
echo $cars[2][0]." :in stock: ".$cars[2][1] . ", sold: ".$cars[2][2]."<br>";
echo $cars[3][0]." :in stock: ".$cars[3][1] . ", sold: ".$cars[3][2]."<br>";
//We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>