<!DOCTYPE html>
<html>
<body>

<?php
//--------------------inheritance---------------
echo "-------inheritance-----";
echo "<br>";
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
    echo "<br>";
  }
}
//The child class will inherit all the public and protected properties and methods from the parent class. 
//In addition, it can have its own properties and methods.
//Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
    echo "<br>"; 
  }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();

// //-------------------PHP - Inheritance and the Protected Access Modifier---------------


// //In the previous chapter we learned that protected properties or methods can be accessed within the class and by classes derived from that class.
// // What does that mean?
// echo "----------PHP - Inheritance and the Protected Access Modifier-------";
// echo "<br>";
// class Fruit1 {
//     public $name;
//     public $color;
//     public function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color; 
//     }
//     protected function intro() {
//       echo "The fruit is {$this->name} and the color is {$this->color}."; 
//     }
//   }
  
//   class Strawberry1 extends Fruit1 {
//     public function message() {
//       echo "Am I a fruit or a berry? "; 
//     }
//   }
  
  // Try to call all three methods from outside class
//   $strawberry = new Strawberry1("Strawberry", "red");  // OK. __construct() is public
//   $strawberry->message(); // OK. message() is public
//   $strawberry->intro(); // ERROR. intro() is protected
//In the example above we see that if we try to call a protected method (intro()) from outside the class, we will receive an error.
// public methods will work fine!
echo "<br>";
    echo "-----------------PHP - Overriding Inherited Methods-----------------";
    echo "<br>";
    
//Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
//Look at the example below.
// The __construct() and intro() methods in the child class (Strawberry) will override the __construct() and intro() methods in the parent class (Fruit):
class Fruit2 {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color; 
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
  }
  
  class Strawberry2 extends Fruit2 {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight; 
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
    }
  }
  
  $strawberry = new Strawberry2("Strawberry", "red", 50);
  $strawberry->intro();
  echo "<br>";
  echo "--------------------PHP - The final Keyword-----------------------------";
//The final keyword can be used to prevent class inheritance or to prevent method overriding.
final class Fruit {
}
?>
 
</body>
</html>
