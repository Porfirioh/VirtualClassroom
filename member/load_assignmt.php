<?php
include 'config.php';

				$sql = "SELECT * FROM assignment where code='".$_GET["class"]."' and date >= CURDATE()";
				$sql2 = "SELECT * FROM assignment where code='".$_GET["class"]."' and date < CURDATE()";
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					
					echo '
					<tr>
                    <td>'.$row['text'].'</td>
                    <td>Deadline:'.$row['date'].'</td>
                    <td> <a href="result.php?id='.$row['id'].'&class='.$_GET["class"].'" class="btn btn-primary" role="button">View Result</a></td>
					<td> <a class="btn btn-primary" role="button">Status: Active</a></td>
					<td> <a target="_blank" href="delete.php?id='.$row['id'].'" class="btn btn-danger" role="button">Delete</a></td>
                    </tr>
     
					
					';
					}
					if ($result2->num_rows > 0)
					while($row2 = $result2->fetch_assoc()) {
					
					echo '
					<tr>
                    <td>'.$row2['text'].'</td>
                    <td>Deadline:'.$row2['date'].'</td>
                    <td> <a href="result.php?id='.$row2['id'].'&class='.$_GET["class"].'" class="btn btn-primary" role="button">View Result</a></td>
					<td> <a class="btn btn-warning" role="button">Status: Expired</a></td>
					<td> <a target="_blank" href="delete.php?id='.$row2['id'].'" class="btn btn-danger" role="button">Delete</a></td>
                    </tr>
     
					
					';
					}
					
				} else {
					echo "You Haven't Created any Assignment";
				}
				$conn->close();
				
				
	

?>