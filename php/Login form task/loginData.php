<html>
    <head>

    </head>
    <body>
        
    </body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database ="formData";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
$username =$_REQUEST['first_name'];
$password=$_REQUEST['password'];
$userSql ="select * from login_Details where UserName='$username' AND password ='$password';";
$userdata= $conn->query($userSql);
$row =$userdata->fetch_assoc();

if($row >0 ){
  echo "Login successful";
}
else{
  echo "user does not exist";
}
?>  