<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname ="project";

if(isset($_POST['fname'])){
	
$sid=$_POST['id'];
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$sex=$_POST['sex'];
$email=$_POST['email'];
$password=$_POST['password'];
$versity=$_POST['versity'];
$phone=$_POST['phone'];
	
// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO student (sid,fn,ln,sex,email,password,versity,phone)
VALUES ('$sid','$fn','$ln','$sex','$email','$password','$versity','$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
