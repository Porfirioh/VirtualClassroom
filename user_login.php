<?php
session_start();
$servername = "localhost";
$username = "root";
$pass = "";
$dbname ="project";


if(isset($_POST['submit'])){
	
$type=$_POST['type'];
$email=$_POST['email'];
$password=$_POST['password'];

$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from ".$type." where email='".$email."' and password='".$password."'";
$result = $conn->query($sql);
if ($result->num_rows ==1) {
	if($type=="teacher"){
    
       $row = $result->fetch_assoc();
       $_SESSION["id"]= $row["id"];
       $_SESSION["name"]= $row["fn"]. " " . $row["ln"];
	  
	   header('Location: member/');
       exit;
   
    }
	else{
		$row = $result->fetch_assoc();
        $_SESSION["id"]= $row["id"];
		$_SESSION["sid"]= $row["sid"];
        $_SESSION["name"]= $row["fn"]. " " . $row["ln"];
		$_SESSION["sex"]= $row["sex"];
	    $_SESSION["email"]= $row["email"];
	    header('Location: student/');
        exit;
		
	}
} else {
	if($type=="teacher")
    header('Location: member/login.php?m=Login Failed');
    
	else
	  header('Location: student/login.php?m=Login Failed');
}

$conn->close();
	
}else
	echo "failed";

?>