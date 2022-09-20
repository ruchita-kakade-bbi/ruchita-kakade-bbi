<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database ="mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br>";

//insert data into table
$sql="INSERT INTO EMPLOYEES(empid,name,lastname,email )values(101,'John', 'Doe', 'john@example.com')";

if($conn->query($sql)==TRUE){
    echo "New record created successfully";
}
else{
    echo "Error". $sql . "<br>" . $conn->error;
}
$conn->close();
?>