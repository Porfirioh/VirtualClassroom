<?php
session_start();
require 'config.php';
header("Cache-Control: no-cache, must-revalidate");
if(isset($_SESSION["id"])){
	header('Location: index.php');
    exit;
   //echo  $_SESSION["id"];
	
}

if(isset($_POST['email'])){
	$email=$_POST['email'];
    $password=$_POST['pss'];
	
	$sql = "SELECT * from teacher where email='".$email."' and password='".$password."'";
    $result = $conn->query($sql);
if ($result->num_rows ==1) {
	
    
        $row = $result->fetch_assoc();
        $_SESSION["id"]= $row["id"];
	    
        $_SESSION["name"]= $row["fn"]. " " . $row["ln"];
	   
	   header('Location: index.php');
       exit;
	   
	   }
   
	else
	{
		echo "<h2>Wrong Email Or Password</h2>";
		
	}
	
	
	
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><br><a  href="/" class="btn btn-default">Home</a></center>
<div class="container" style="padding:15%">
  <center><h2>Teacher Login</h2></center>
  <form class="form-horizontal" method="post" action="login.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pss" required>
      </div>
    </div>
     
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit"  name="btn" class="btn btn-default">Login</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
