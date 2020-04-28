<?php
include 'config.php';

				$sql = "DELETE FROM assignment where  id='".$_GET["id"]."'";
			
                $result = $conn->query($sql);
              
				$conn->close();
				
				echo "<script> alert('Deleted'); window.close() ; </script>";

?>