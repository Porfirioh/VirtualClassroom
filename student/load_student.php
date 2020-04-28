<?php
include 'config.php';

				$sql = "SELECT * FROM member where code='".$_GET["class"]."'";
			
                $result = $conn->query($sql);
              
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					
					echo '
					<tr>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['sid'].'</td>
                    <td>'.$row['sex'].'</td>
					<td>'.$row['email'].'</td>
                    </tr>
     
					
					';
					}
			
					
				} else {
					echo "No member found";
				}
				$conn->close();
				
				
	

?>