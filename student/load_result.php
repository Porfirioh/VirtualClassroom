<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo  $_SESSION[$_GET["class"]]; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="studentlist.php?class=<?php echo $_GET["class"]; ?>">Student List</a></li>
      <li><a href="about.php?class=<?php echo $_GET["class"]; ?>">About</a></li>
	  <li><a>Code: <?php echo $_GET["class"]; ?></a></li>
    </ul>
	<form class="navbar-form navbar-left" method="GET" action="studentlist.php">
  <div class="input-group">
    <input type="hidden" name="class" value="<?php echo $_GET["class"]; ?>">
    <input type="text" name="q" class="form-control" placeholder="Search Student" required>
	
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>

  </div>
</nav>
</div>

<center>
<div style="width:100%">
<br>
<br>
<h2>Result Feeds</h2>
<br>
</center>

<div style="padding-left:10%;padding-right:10%;text-align:center;">
	
	<table class="table table-bordered">
    
    <tbody>
	<thead>
      <tr>
        <th style="text-align:center;" >Student Name</th>
        <th style="text-align:center;">ID</th>
        <th style="text-align:center;">Submit Time</th>
		<th style="text-align:center;">Attachment</th>
      </tr>
    </thead>
     <?php
     include 'config.php'; 
	 
	 $sql = "SELECT * FROM result where aid='".$_GET["id"]."' ";
	 $result = $conn->query($sql);
	 if ($result->num_rows > 0) {
					// output data of each row
	 while($row = $result->fetch_assoc()) {
	 $sql2="SELECT fn,ln FROM student where sid='".$row["sid"]."' ";
	 $result2 = $conn->query($sql2);
	 $row2 = $result2->fetch_assoc();
	  $name=$row2['fn']." ".$row2['ln'];
	  echo '
	  <tr>
                    <td>'.$name.'</td>
                    <td>'.$row['sid'].'</td>
                    <td> '.$row['time'].'</td>
					<td> <a  href="'.$row['file'].'" class="btn btn-danger" role="button" download>View</a></td>
                    </tr>
	  
	  ';
	 }
	  
	 }
	 
	 else{
		 
		 echo "No result";
	 }
	 
	 
	 
	 
	 ?>
    </tbody>
	
  </table>
			
		
</div>
