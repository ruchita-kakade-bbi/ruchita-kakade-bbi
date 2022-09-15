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
    echo "<br>";
//foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
echo "---forEach loop----";
echo "<br>";
    $colors =array("Red","black","white","Grey");
    foreach($colors as $value){
        echo "$value <br>";
    
    }
//To display both keys and values
echo "<br>";
echo "---forEach loop to display key and  value----";
echo "<br>";
   $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x=>$val){
        echo "$x=$val <br>";
    }
echo "<br>";
//break statement 
echo "----break in php---- ";
    for($y=0;$y<=10;$y++){
        if($y==6){
            break;
        }
    echo "number is: $y <br>" ;
    
    }
echo "<br>";   
//continue
echo "----continue in php---- ";
echo "<br>";
     for($y=0;$y<=10;$y++){
        if($y==6){
          continue;
        }
    echo "number is: $y <br>" ;
    
    }

?>