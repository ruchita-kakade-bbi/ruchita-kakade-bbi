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
//create table in db
$sql = "create table employees(empid int UNIQUE , name varchar(50),lastname varchar(50) ,email varchar(50))";

if($conn->query($sql)==TRUE){
    echo "table created successfully";
}
else{
    echo "Error creating table:" . $conn->error;
}
$conn->close();
?>