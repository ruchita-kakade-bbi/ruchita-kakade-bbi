<?php
// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key
echo"-----Sort Array in Ascending Order - sort()------";
$cars = array("Volvo", "BMW", "Toyota");
 echo "<br>";
sort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
echo "<br>";
echo "---sorts the elements of the $numbers array in ascending alphabetical order:-----";
echo"<br>";
    $numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
echo "<br>";
echo"Sort Array in Descending Order - rsort()";
echo "<br>";
    rsort($cars);

    $clength = count($cars);
    for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
    }    
echo "<br>";
//-----
echo"----Sort Array (Ascending Order), According to Value - asort()----";
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);
    foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
echo "<br>";
//-----
echo"---Sort Array (Ascending Order), According to Key - ksort()---";
echo"<br>";
    ksort($age);

    foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<br>";
//-----
echo"--Sort Array (Descending Order), According to Value - arsort()--";
echo "<br>";
    arsort($age);
    foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
    //-----
echo"----Sort Array (Descending Order), According to Key - krsort()----";
echo "<br>";
    krsort($age);

    foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
?>