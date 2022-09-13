<?php
//is_int() fun to check var type is int or not
$x =734;
    var_dump(is_int($x));
    echo "<br>";
    var_dump(is_long($x));
     echo "<br>";
//is_float()-to check var type 9s float or not
$y =10.654;
    var_dump(is_float($y));
    echo "<br>";
    var_dump(is_float($x));
     echo "<br>";
    var_dump(is_double($y));
     echo "<br>";

//is infinity- to check value is finite or not
 $z=1.9e411;
 var_dump(is_finite($z));
?>