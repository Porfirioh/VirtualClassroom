<?php
session_start();
include 'config.php';

				$sql = "DELETE FROM result where  aid='".$_GET["id"]."' and sid ='".$_SESSION['sid']."' ";
			
                $result = $conn->query($sql);
                
				$conn->close();
				header('Location: class_view.php?class='.$_GET["class"].'&m=Unsubmited');
                exit;
		        

?>