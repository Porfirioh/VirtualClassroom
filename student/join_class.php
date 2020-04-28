<?php
session_start();
include 'config.php';
if(isset($_POST['code'])){
	
$code=$_POST['code'];
$sid=$_SESSION["id"];
$name=$_SESSION["name"];
$sex=$_SESSION["sex"];
$email=$_SESSION["email"];

   $sqlx="SELECT name from member where code='".$code."' and sid='".$sid."'";
   $resultx = $conn->query($sqlx);

     if ($resultx->num_rows ==0) {

$sql2="SELECT id FROM class where code='".$code."'";


$result2 = $conn->query($sql2);

if ($result2->num_rows ==1) {



$sql = "INSERT INTO member (name,sex,email,code,sid)
VALUES ('$name','$sex','$email','$code','$sid')";

if ($conn->query($sql) === TRUE) {
   header('Location: index.php?m=Class Created');
   exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
	header('Location: index.php?m=No Class Found');
exit;}

}
else{
	header('Location: index.php?m=Already a member');
    exit;
}
$conn->close();


}




?>