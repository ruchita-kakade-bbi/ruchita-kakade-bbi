<?php
class A1{
    public $firstName;
    public $lastName;
    public function __construct($firstName,$lastName){
       $this->firstName =$firstName;
       $this->lastName=$lastName;
      
    }
    public function detail(){
         return "My name is $this->firstName   $this->lastName !";
    }
}
$mydetails = new A1("atharva","kakade");
echo $mydetails -> detail();
echo "<br>";
$mydetails = new A1("abch","tuhh");
echo $mydetails -> detail();
?>
