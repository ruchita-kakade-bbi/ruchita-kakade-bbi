<html>
    <head>
<style>
    h2{
        text-align: center;
         color:brown;
         margin-top:12% ;
         font-size: 80px;
    }
</style>
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
$username =$_POST['first_name'];
$password=$_POST['password'];
$userSql ="select * from login_Details where UserName='$username' AND password ='$password';";
$userdata= $conn->query($userSql);
$row =$userdata->fetch_assoc();

if($row >0 ){
  echo "<h2>login successful</h2>";
}
else{
  echo "<h2>user does not exist</h2>";
}
?>  