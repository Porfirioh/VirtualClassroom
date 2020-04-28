<?php
session_start();
include 'config.php';
if(isset($_POST['code'])){

$target_dir = "data/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$f_name=$target_dir .$_SESSION['sid'].uniqid();
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "zip" && $imageFileType != "rar" && $imageFileType != "txt" && $imageFileType != "pdf" && $imageFileType != "ppt" && $imageFileType != "pptx" && $imageFileType != "doc" && $imageFileType != "docx") {
    echo "unknown file";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $f_name.'.'.$imageFileType)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		insert($_POST['aid'],$_POST['code'],$f_name.'.'.$imageFileType,$_SESSION['sid'],$conn);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}


function insert($aid,$code,$file,$sid,$conn){
	
	//echo $date.' '.$text.' '.$file.' '.$code;
	$d=date("Y-m-d");
	$sql = "INSERT INTO result (aid, sid, file, time,code)
    VALUES ('$aid','$sid','$file','$d','$code')";

if ($conn->query($sql) === TRUE) {
   header("Location: class_view.php?class=$code&m=Assignment Submited");
   exit;
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
}
?>