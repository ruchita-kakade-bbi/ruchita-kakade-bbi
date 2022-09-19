<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
//A class is a template for objects, and an object is an instance of class.
//Note: In a class, variables are called properties and functions are called methods!
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
//The $this keyword refers to the current object, and is only available inside methods.
  }
//So, where can we change the value of the $name property? There are two ways:
//1. Inside the class (by adding a set_name() method and use $this):
  function get_name() {
    return $this->name;
  }
}
$apple =new Fruit();
$banana =new Fruit();
$apple->set_name("apple");
$banana->set_name("banana");

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo"<br>";

//-------------------------php instance of------------------------
//You can use the instanceof keyword to check if an object belongs to a specific class:
var_dump($apple instanceof Fruit);

?>
 
</body>
</html>
