<!DOCTYPE html>
<html>
<body>

<?php
//Interfaces allow you to specify what methods a class should implement.
//Interfaces make it easy to use a variety of different classes in the same way.
// When one or more classes use the same interface, it is referred to as "polymorphism".
//Interfaces are declared with the interface keyword:
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
    echo "<br>";
  }
}

$animal = new Cat();
$animal->makeSound();

//PHP - Interfaces vs. Abstract Classes
// Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

//     Interfaces cannot have properties, while abstract classes can
//     All interface methods must be public, while abstract class methods is public or protected
//     All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
//     Classes can implement an interface while inheriting from another class at the same time
        // Interface definition
interface Animal1 {
    public function makeSound();
  }
  
  // Class definitions
  class Cat1 implements Animal1 {
    public function makeSound() {
      echo " Meow ";
      echo "<br>";
    }
  }
  
  class Dog implements Animal1 {
    public function makeSound() {
      echo " Bark ";
      echo "<br>";
    }
  }
  
  class Mouse implements Animal1 {
    public function makeSound() {
      echo " Squeak ";
      echo "<br>";
    }
  }
  
  // Create a list of animals
  $cat = new Cat1();
  $dog = new Dog();
  $mouse = new Mouse();
  $animals = array($cat, $dog, $mouse);
  
  // Tell the animals to make a sound
  foreach($animals as $animal) {
    $animal->makeSound();
  }  
//Cat, Dog and Mouse are all classes that implement the Animal interface, which means that all of them are able to make a sound using the makeSound() method.
// Because of this, we can loop through all of the animals and tell them to make a sound even if we don't know what type of animal each one is.
//Since the interface does not tell the classes how to implement the method, each animal can make a sound in its own way.


?>
 
</body>
</html>
