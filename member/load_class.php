<?php 
include 'config.php';
$sql = "SELECT * FROM class where tid = '".$_SESSION["id"]."'";
                $result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					//$_SESSION[$row["code"]]=$row["name"];
					echo '<option value="class_view.php?class='.$row["code"].'" >'.$row["name"].'</otpion>';
					}
				}
				$conn->close();
?>

		    