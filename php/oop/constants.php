<!DOCTYPE html>
<html>
<body>

<?php
//Constants cannot be changed once it is declared.

//Class constants can be useful if you need to define some constant data within a class.

//A class constant is declared inside a class with the const keyword.
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;
echo "<br>";
//Or, we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here:
echo "---------------access a constant from inside the class by using the self keyword-------------<br> ";
class Goodbye1 {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
  }
  
  $goodbye = new Goodbye1();
  $goodbye->byebye();
?>

</body>
</html>
