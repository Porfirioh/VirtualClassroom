<?php
require 'config.php';

				$sql = "SELECT * FROM assignment where code='".$_GET["class"]."' and  id != (SELECT aid from result where sid='".$_SESSION["sid"]."') ";
				
				$sql2 = "SELECT * FROM assignment where code='".$_GET["class"]."' and ( id = (SELECT aid from result where sid='".$_SESSION["sid"]."'))";
				
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
				
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$today = date("Y-m-d");
						$com=$row['date'];
						$sts="Active";
						if($today>$com){
						
						$sts="&#9785; Late";
							
						}
					
					echo '
					<tr>
                    <td>'.$row['text'].'</td>
                    <td>Deadline:'.$row['date'].'</td>
                    <td> <a href="result.php?id='.$row['id'].'&class='.$_GET["class"].'" class="btn btn-primary" role="button">Submit Now</a></td>
					<td> <a class="btn btn-primary" role="button">'.$sts.'</a></td>
					<td> <a  class="btn btn-danger" role="button">Pending</a></td>
                    </tr>
     
					
					';
					}
					
					
				} 
				
				if ($result2->num_rows > 0)
					while($row2 = $result2->fetch_assoc()) {
					    $today = date("Y-m-d");
						$com=$row2['date'];
						$sts="Active";
						if($today>$com){
						
						$sts="&#9785; Late";
							
						}
					echo '
					<tr>
                    <td>'.$row2['text'].'</td>
                    <td>Deadline:'.$row2['date'].'</td>
                    <td> <a href="delete.php?id='.$row2['id'].'&class='.$_GET["class"].'" class="btn btn-primary" role="button">Unsubmit</a></td>
					<td> <a class="btn btn-primary" role="button">'.$sts.'</a></td>
				    <td> <a  class="btn btn-primary" role="button">Submited</a></td>
                    </tr>
     
					
					';
					}
				else {
					echo "You Haven't Created any Assignment";
				}
				$conn->close();
				
				
	

?>