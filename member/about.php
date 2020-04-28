<?php
session_start();
header("Cache-Control: no-cache, must-revalidate");
include 'head.php';
?>
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo  $_SESSION[$_GET["class"]]; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li><a class="active" href="studentlist.php?class=<?php echo $_GET["class"]; ?>">Student List</a></li>
      <li><a href="about.php?class=<?php echo $_GET["class"]; ?>">About</a></li>
	  <li><a>Code: <?php echo $_GET["class"]; ?></a></li>
    </ul>
	 <form class="navbar-form navbar-left">
		<select name="type" class="form-control" name="aa" onchange="report(this.value)" >
		<option value="">------<b>Select Class</b>------</option>
				<?php  include 'load_class.php';?>																															
		</select>
        </form>
		
	    <script>
        function report( value){
	    window.location.href = value;
	
}
</script>
    <form class="navbar-form navbar-left" method="GET">
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

<br>

</center>
<div style="padding-left:10%;padding-right:10%;text-align:center;">
<div class="container">
  <div class="jumbotron">
  
<?php
include 'config.php';

				$sql = "SELECT about,name FROM class where code='".$_GET["class"]."'";
			
                $result = $conn->query($sql);
              
				
				if ($result->num_rows > 0) {
					// output data of each row
				$row = $result->fetch_assoc();
					
					echo '
					<h1>'.$row['name'].'</h1>
					<br>
				    <p>'.$row['about'].'</p>
					';
					
			
				} else {
					//echo "No r found";
				}
				$conn->close();
				
				
	

?>
</div>
</div>
</div>
<?php
include 'footer.php';
?>
