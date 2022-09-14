<?php
echo "----PHP GLOBALS----";
echo"<br>";
    $x = 75;
    $y = 25;
 
    function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    addition();
    echo $z;
echo"<br>";
echo"<br>";
echo "---php servers--- <br>";
    echo  $_SERVER['PHP_SELF'];
    //Returns the filename of the currently executing script
    echo"<br>";
    echo $_SERVER['GATEWAY_INTERFACE'];	
    //Returns the version of the Common Gateway Interface (CGI) the server is using
    echo"<br>";
    echo $_SERVER['SERVER_ADDR'];
    //Returns the IP address of the host server
    echo"<br>";
    echo $_SERVER['SERVER_NAME'];
    //	Returns the name of the host server (such as www.w3schools.com)
    echo"<br>";
    echo $_SERVER['SERVER_SOFTWARE'];
    //Returns the server identification string (such as Apache/2.2.24)
    echo"<br>";
    echo $_SERVER['SERVER_PROTOCOL'];	
    //Returns the name and revision of the information protocol (such as HTTP/1.1)
    echo"<br>";
    echo $_SERVER['REQUEST_METHOD'];
    //Returns the request method used to access the page (such as POST)
    echo"<br>";
    echo$_SERVER['REQUEST_TIME'];	
    //Returns the timestamp of the start of the request (such as 1377687496)
    echo"<br>";
    echo $_SERVER['QUERY_STRING'];	
    //Returns the query string if the page is accessed via a query string
    echo"<br>";
    echo$_SERVER['HTTP_ACCEPT'];	
    //Returns the Accept header from the current request
    echo"<br>"; 
    echo $_SERVER['HTTP_ACCEPT_CHARSET'];	
    //Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
    echo"<br>";
    echo $_SERVER['HTTP_HOST'];	
    //Returns the Host header from the current request
    echo"<br>";
    echo $_SERVER['HTTP_REFERER'];	
    //Returns the complete URL of the current page (not reliable because not all user-agents support it)
    echo"<br>";
    echo $_SERVER['HTTPS'];	//Is the script queried through a secure HTTP protocol
    echo"<br>";
    echo $_SERVER['REMOTE_ADDR'];	//Returns the IP address from where the user is viewing the current page
    echo"<br>";
    echo $_SERVER['REMOTE_HOST'];	//Returns the Host name from where the user is viewing the current page
    echo"<br>";
    echo $_SERVER['REMOTE_PORT'];	//Returns the port being used on the user's machine to communicate with the web server
    echo"<br>";
    echo  $_SERVER['SCRIPT_FILENAME'];//	Returns the absolute pathname of the currently executing script
    echo"<br>"; 
    echo  $_SERVER['SERVER_PORT'];	//Returns the port on the server machine being used by the web server for communication (such as 80)
    echo"<br>";
    echo $_SERVER['SERVER_ADMIN'];	//Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
    echo"<br>";
    echo  $_SERVER['SERVER_PORT'];	//Returns the port on the server machine being used by the web server for communication (such as 80)
    echo"<br>";
    echo  $_SERVER['SERVER_PORT'];	//Returns the port on the server machine being used by the web server for communication (such as 80)
    echo"<br>";
    echo  $_SERVER['SERVER_PORT'];	//Returns the port on the server machine being used by the web server for communication (such as 80)
    echo"<br>";
    echo $_SERVER['SERVER_SIGNATURE'];	//Returns the server version and virtual host name which are added to server-generated pages
    echo"<br>";
    echo $_SERVER['PATH_TRANSLATED'];	//Returns the file system based path to the current script
    echo"<br>";
    echo$_SERVER['SCRIPT_NAME'];	//Returns the path of the current script
    echo"<br>";
    echo   $_SERVER['SCRIPT_URI'];	//Returns the URI of the current page
 ?>
 
 <html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
    echo "---PHP REQUEST---<br> ";
 //PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
echo "<br>";
echo "---PHP  POST----";
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
echo "<br>";
echo "---PHP  Get----";
?>
 </body>
</html>


<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>