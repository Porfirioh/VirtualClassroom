<?php
session_start();
header("Cache-Control: no-cache, must-revalidate");
if(!isset($_SESSION["id"])){
	header('Location: /n/');
    exit;
   //echo  $_SESSION["id"];
	
}

include 'head.php';
include 'class.php';
include 'footer.php';
?>