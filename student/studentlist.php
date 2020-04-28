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
      <li><a class="active" href="studentlist.php?class=<?php echo $_GET["class"]; ?>">Class Mates</a></li>
      <li><a href="about.php?class=<?php echo $_GET["class"]; ?>">About</a></li>
	  <li><a>Code: <?php echo $_GET["class"]; ?></a></li>
    </ul>
	<div class="navbar-form navbar-left">
       
		<form>
		<select name="type"  name="aa" onchange="report(this.value)"  class="form-control">
		<option value="">------<b>Select Class</b>------</option>
				<?php  include 'load_class.php';?>																															
		</select>
        </form>
		
</div>

  </div>
</nav>
</div>
<script>
function report( value){
	window.location.href = value;
	
}
</script>
<br>

</center>

<div style="padding-left:10%;padding-right:10%;text-align:center;">
	
	<table class="table table-bordered" >
    <thead>
      <tr>
        <th style="text-align:center;" >Name</th>
        <th style="text-align:center;">ID</th>
        <th style="text-align:center;">Gender</th>
		<th style="text-align:center;">Email</th>
      </tr>
    </thead>
    <tbody>
	
      <?php 
	  if(!isset($_GET['q']))
	  include 'load_student.php'; 
	  else
	  include 'search_student.php';   
	  ?>
    </tbody>
	
  </table>
			
		
</div>

<?php
include 'footer.php';
?>