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

// $sql ="ALTER TABLE EMPLOYEES ADD UNIQUE (empid)";

//insert multiple record

$sql ="INSERT INTO EMPLOYEES(empid,name,lastname,email )values(102,'Mary', 'Moe', 'mary@example.com');";
$sql .="INSERT INTO EMPLOYEES(empid,name,lastname,email )values(103,'Julie', 'Dooley', 'julie@example.com');";
$sql .="INSERT INTO EMPLOYEES(empid,name,lastname,email)values(104,'atharva','kakade','atharva@gmail.com');";


if($conn->multi_query($sql)=== TRUE){
    echo "New records created successfully";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// if($conn->query($sql)===TRUE){
//     echo "set unique id";
// }
// else{
//     echo "no" . $conn->error;
// }
// $conn->close();

?>