<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo  $_SESSION[$_GET["class"]]; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="studentlist.php?class=<?php echo $_GET["class"]; ?>">Class Mates</a></li>
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
<center>

<br>
<h2>AssignMent Feeds</h2>
<br>
</center>

<div style="padding-left:10%;padding-right:10%;text-align:center;">
	
	<table class="table table-bordered">
    
    <tbody>
      <?php include 'load_assignmt.php'; ?>
    </tbody>
	
  </table>
			
		
</div>
