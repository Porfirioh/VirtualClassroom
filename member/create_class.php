<?php
session_start();
include 'config.php';
if(isset($_POST['name'])){
	
$about=$_POST['about'];
$name=$_POST['name'];
$tid=$_SESSION["id"];
$code=substr(uniqid($tid.'_'), 0, 14);
$sql = "INSERT INTO class (name,about,tid,code)
VALUES ('$name','$about','$tid','$code')";

if ($conn->query($sql) === TRUE) {
   header('Location: index.php?m=Class Created');
  exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}




?>