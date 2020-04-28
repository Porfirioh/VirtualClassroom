<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname ="project";

if(isset($_POST['fname'])){
$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 	
//$sid=$_POST['id'];
$fn=preg_replace("/[^a-zA-Z]+/", "", $_POST['fname']);
$ln=preg_replace("/[^a-zA-Z]+/", "", $_POST['lname']);
$sex=$_POST['sex'];
$email=check($_POST['email'],$conn);
$password=$_POST['password'];

$versity=preg_replace("/[^a-zA-Z]+/", "", $_POST['versity']);
$phone=preg_replace("/[^a-zA-Z]+/", "", $_POST['phone']);
	
// Create connection


$sql = "INSERT INTO teacher (fn,ln,sex,email,password,versity,phone)
VALUES ('$fn','$ln','$sex','$email','$password','$versity','$phone')";

if ($conn->query($sql) === TRUE) {
   header('Location: member/login.php');
   exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


function check($email,$conn){
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
       
	  $sql="SELECT * from teacher where email='".$email."'"; 
	  $result = $conn->query($sql);
      if ($result->num_rows==0) {
         return $email;
	  }
	  else{
		 header('Location: member/signup.php?m=email already exist');
         exit; 
		  
	  }
	   
	   
	   
} else {
    header('Location: member/signup.php?m=invalid email');
    exit;
}
	
}

?>
