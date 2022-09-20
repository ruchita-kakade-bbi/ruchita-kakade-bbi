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

$sql= "SELECT empid,name,lastname,email from employees";
$result=$conn->query($sql);
if($result->num_rows>0){
    //output data of each row
     while($row = $result->fetch_assoc()) {
    echo "id: " . $row["empid"]. "  - Name: " . $row["name"]. "     lastName: " . $row["lastname"]. " email: " . $row["email"]. "<br>";
  }

}

$conn->close(); 

?>