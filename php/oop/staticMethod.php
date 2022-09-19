<!DOCTYPE html>
<html>
<body>

<?php
//Static methods can be called directly - without creating an instance of the class first.
//Static methods are declared with the static keyword:
//To access a static method use the class name, double colon (::), and the method name:
//syntax--ClassName::staticMethod();

                    // class greeting {
                    //   public static function welcome() {
                    //     echo "Hello World!";
                    //   }
                    // }

                    // // Call static method
                    // greeting::welcome();
                    // echo "<br>";
//Here, we declare a static method: welcome(). 
//  Then, we call the static method by using the class name, double colon (::), and the method name (without creating an instance of the class first).
//echo "----------using the self keyword---------------<br>";
//A class can have both static and non-static methods. A static method can be accessed from a method in the same class  using the self keyword and double colon (::):

                    //             class greeting1 {
                    // public static function welcome() {
                    //     echo "Hello World!";
                    // }
                    // public function __construct() {
                    //     self::welcome();
                    // }
                    // }

                    //new greeting1();
                    //echo "<br>";
echo "-------------------------Static methods can also be called from methods in other classes.--------------------------";
//Static methods can also be called from methods in other classes. To do this, the static method should be public:
       class greeting {
    public static function welcome() {
      echo "Hello World!";
    }
  }

  class SomeOtherClass {
    public function message() {
      greeting::welcome();
    }
  }
  echo "<br>";
echo "-----------------calling a static method from a child class---------------------<br>";
  //To call a static method from a child class, use the parent keyword inside the child class. 
  //Here, the static method can be public or protected.
                            class domain {
                protected static function getWebsiteName() {
                    return "W3Schools.com";
                }
                }

                class domainW3 extends domain {
                public $websiteName;
                public function __construct() {
                    $this -> websiteName = parent::getWebsiteName();
                }	
                }

                $domainW3 = new domainW3;
                echo $domainW3 -> websiteName;
            
?>
 
</body>
</html>
