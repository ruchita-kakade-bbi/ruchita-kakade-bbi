<?php
//constant are automatically global across entire script
    define("greeting1","welcome to w3 school");
    echo greeting1;
    echo "<br>";

//constant with case-insensitive
    define("GREETING","constants are automatically global across entire script",true);
    echo greeting;
    echo "<br>";
//array constant using define() fun
    define("flowers",["Rose","Lotus","Mogra"]);
    echo flowers[1];
    echo "<br>";
//constant inside a function, even if it is defined outside the function:
    define("cars","volvo,BMW");
    function test(){
        echo cars;
    }
    test();
?>