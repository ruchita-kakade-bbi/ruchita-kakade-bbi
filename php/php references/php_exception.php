<?php 
//The Exception() constructor is used to create an Exception object and set some of its properties.
//new Exception(message, code, previous)
function divide($dividend,$divisor){
    if($divisor == 0){
        throw new Exception("Division by 0");
    }
    return $dividend / $divisor;
}
 try{
    echo divide(5,0);

}
catch(Exception $ex){
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
    echo"<br>"; 
    //The getCode() method returns an integer which can be used to identify the exception.
    //$exception->getCode()
    echo"---------getcode() return error code-------------<br>";
    echo "error code :- " . $ex->getcode() . "<br>";
     echo"<br>"; 
    //The getFile() method returns the absolute path to the file where an exception occurred.
        echo"---------getfile() return error file path-------------<br>";
        echo "error file:" . $ex->getfile() . "<br>";
        echo"<br>";    
        echo"---------PHP Exception getMessage() Method returns a description of the error  -------------<br>";
        //The getMessage() method returns a description of the error or behaviour that caused the exception to be thrown.
        //syntax:- $exception->getMessage()
        echo $ex->getMessage();
        echo"<br>";
        echo"---------PHP Exception getLine() Method- returns the line number of the line of code which threw the exception -------------<br>";
        //The getLine() method returns the line number of the line of code which threw the exception.
        //syntax=$exception->getLine()
        echo $ex->getLine();
        echo"<br>";
        echo "---------------PHP Exception getPrevious() Method----------------<br>";
        //If the exception was triggered by another one, then the getPrevious() method returns the other exception. Otherwise it returns null.
        //syntax:-$exception->getPrevious()
        try {
                try {
                    throw new Exception("An error occurred", 1);
                } catch(Exception $e1) {
                    throw new Exception("Another error occurred", 2, $e1);
                    echo"<br>";
                }
                } catch (Exception $e2) {
                echo $previous = $e2->getPrevious();
                echo"<br>";
                echo $previous->getMessage();
                }
                echo"<br>";
                echo"<br>";

                echo"---------PHP Exception getTrace() Method-----------<br>";
                //The getTrace() method returns a stack trace in the form of an array.
                //syntax:-$exception->getTrace()
                //Returns a stack trace in the form of an array
                function myFunction($num){
                    throw new Exception("An Error occured");

                }
                try{
                    myFunction(5);
                }
                catch(exception $ex){
                print_r($ex->getTrace());  
                }
                }
                echo"<br>";
                echo"<br>";
                echo "--------------PHP Exception getTraceAsString() Method------------<br>";
                //The getTraceAsString() method returns a stack trace in the form of a string.  
                //SYNTAX:-$exception->getTraceAsString()
                //Stack traces contain information about all of the functions that are running at a given moment. 
                //The stack trace provided by this method has information about the stack at the time that the exception was thrown.
                function myFunction1($num) {
                 throw new Exception("An error occurred");
                }
                try {
                myFunction1(5);
                } catch (Exception $e) {
                print_r($e->getTraceAsString());
                }


?>