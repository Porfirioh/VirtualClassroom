<?php
include 'config.php';
if(isset($_POST['text'])){

$target_dir = "data/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$f_name=$target_dir .$_POST["fn"].uniqid();
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "ppt" && $imageFileType != "pptx" && $imageFileType != "doc" && $imageFileType != "docx") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $f_name.'.'.$imageFileType)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		insert($_POST['date'],$_POST['text'],$f_name.'.'.$imageFileType,$_POST['fn'],$conn);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

}


function insert($date,$text,$file,$code,$conn){
	
	echo $date.' '.$text.' '.$file.' '.$code;
	
	$sql = "INSERT INTO assignment (text, file, code, date)
    VALUES ('$text','$file','$code','20$date')";

if ($conn->query($sql) === TRUE) {
   header("Location: class_view.php?class=$code&m=Assignment Created");
   exit;
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
}
?>