<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO EMPLOYEES(empid, name, lastname, email) VALUES (?, ?, ?, ?);");
$stmt->bind_param("isss", $empid, $firstname, $lastname, $email);

// set parameters and execute
$empid= 101;
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$empid= 102;
$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();


$empid= 103;
$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

$empid=104;
$firstname= "abc";
$lastname="fgh";
$email="abc@gmail.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>