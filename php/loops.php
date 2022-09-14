<?php
//while loop -it runs until condition is true
echo "---while loop---";
echo "<br>";

    $x= 0;
        while($x <11){
            echo "Number is: $x  <br>";
            $x++;
        }
        echo "<br>";
// do while loop
echo "--- do while loop---";
echo "<br>";
        $x =1;
    do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

//for loop
echo "<br>";
echo "----for loop---- ";
echo "<br>";
    for($x=0;$x<=4;$x++){
        echo $x;
        echo "<br>";
    }

?>