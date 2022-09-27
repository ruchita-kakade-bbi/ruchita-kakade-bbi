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

// $sql = "CREATE DATABASE formData";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

//create table in db
// $sql = "create table login_Details(UserName varchar(50),lastName varchar(50),password varchar(50) UNIQUE);";

// if($conn->query($sql)==TRUE){
//     echo "table created successfully";
// }
// else{
//     echo "Error creating table:" . $conn->error;
// }
$fname =$_REQUEST['first_name'];
$lname =$_REQUEST['lname'];
$password=$_REQUEST['password'];

$sql="INSERT INTO login_Details(UserName ,lastName,password)values('$fname','$lname','$password');";

if($conn->query($sql)==TRUE){
    echo "signup successful";
}
else{
    echo "fail to signup" . $conn->error;
}

$conn->close();

?>
