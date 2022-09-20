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

$sql = "SELECT empid, name, lastname FROM EMPLOYEES ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br> id: ". $row["empid"]. " - Name: ". $row["name"]. " " . $row["lastname"] . "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>

